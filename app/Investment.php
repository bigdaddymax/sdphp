<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Financial;

class Investment extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'investments';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'investment_type_id',
    'currency',
    'investment_status_id',
    'parent_ownership',
    'security_type_id',
  ];

  public function currency()
  {
    return $this->belongsTo('App\Currency', 'commitment_currency', 'code');
  }

  public function operations()
  {
    return $this->hasMany('App\Operation', 'investment_id', 'id')->with('type');
  }

  public function status()
	{
		return $this->belongsTo('App\InvestmentStatus', 'investment_status_id', 'id');
	}

  public function allCashflows()
  {
    return $this->operations->filter(function ($item) {
      return $item->type->cashflow == 1;
    });
  }

  public function cashflows($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->allCashflows()->filter(function ($item) use ($navDate) {
      return ($item->date <= $navDate &&
        !($item->type->group == "Net Asset Value" && $item->date != $navDate));
    });
  }

  public function allContributions()
  {
    return $this->allCashflows()->filter(function ($item) {
      return $item->type->group == "Contribution";
    });
  }

  public function contributions($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->allContributions()->filter(function ($item) use ($navDate) {
      return $item->date <= $navDate;
    });
  }

  public function sumContributions($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return -$this->contributions($navDate)->sum('amount');
  }

  public function allDistributions()
  {
    return $this->allCashflows()->filter(function ($item) {
      return $item->type->group == "Distribution";
    });
  }

  public function distributions($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->allDistributions()->filter(function ($item) use ($navDate) {
      return $item->date <= $navDate;
    });
  }

  public function sumDistributions($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->distributions($navDate)->sum('amount');
  }

  public function nav($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->allCashflows()->filter(function ($item) use ($navDate) {
      return ($item->type->group == "Net Asset Value" && $item->date == $navDate);
    });
  }

  public function sumNav($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->nav($navDate)->sum('amount');
  }

  public function unfunded($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->operations->filter(function ($item) use ($navDate) {
      return ($item->type->group == "Unfunded Commitment" && $item->date == $navDate);
    });
  }

  public function unfundedAmount($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    $unfundedEntry = $this->unfunded($navDate)->first();
    if (!empty($unfundedEntry) ) {
      return $unfundedEntry->amount;
    }
    else { // if unfunded operation is unavailable, then estimate
      return $this->commitment_amount - $this->sumContributions($navDate);
    }
  }

  function tvpi($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return ($this->sumDistributions($navDate) + $this->sumNav($navDate)) / $this->sumContributions($navDate);
  }

  function dpi($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->sumDistributions($navDate) / $this->sumContributions($navDate);
  }

  function rvpi($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->sumNav($navDate) / $this->sumContributions($navDate);
  }

  function called($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    return $this->sumContributions($navDate) / $this->commitment_amount;
  }

  function irr($navDate = null)
  {
    $navDate = $navDate ?: $this->maxNavDate();

    $cashflows = $this->cashflows($navDate);
    $amounts = $cashflows->pluck('amount')->toArray();
    $dates = $cashflows->pluck('timestamp')->toArray();

    $f = new Financial;
    return $f->XIRR($amounts,$dates);
  }

  public function maxNavDate()
  {
    // cashflow_type_id 7 = NAV
    return $this->operations()
      ->orderBy('date', 'desc')->where('investment_operation_type_id',7)->get()->first()->date;
  }

  public function navDateList()
  {
    // cashflow_type_id 7 = NAV
    $navEntries = $this->operations()
      ->orderBy('date', 'desc')->where('investment_operation_type_id',7)->get();

    return $navEntries->pluck('date');
  }

  public function summaryNetPerformanceByDate($formatted = false)
  {
    $navDateList = $this->navDateList();

    if ($formatted == false) {
      $navDateList->each(function ($item, $key) use (&$output){
        $output[$key]['date'] = $item->format('m/d/Y');
        $output[$key]['contributions'] = $this->sumContributions($item);
        $output[$key]['distributions'] = $this->sumDistributions($item);
        $output[$key]['nav'] = $this->sumNav($item);
        $output[$key]['irr'] = $this->irr($item);
        $output[$key]['tvpi'] = $this->tvpi($item);
        $output[$key]['dpi'] = $this->dpi($item);
        $output[$key]['rvpi'] = $this->rvpi($item);
        $output[$key]['unfunded'] = $this->unfundedAmount($item);
        $output[$key]['called'] = $this->called($item);
      });
    }
    else {
      $navDateList->each(function ($item, $key) use (&$output){
        $output[$key]['date'] = $item->format('m/d/Y');
        $output[$key]['contributions'] = $this->currency->symbol.number_format($this->sumContributions($item), $this->currency->decimal_digits);
        $output[$key]['distributions'] = $this->currency->symbol.number_format($this->sumDistributions($item), $this->currency->decimal_digits);
        $output[$key]['nav'] = $this->currency->symbol.number_format($this->sumNav($item), $this->currency->decimal_digits);
        $output[$key]['irr'] = number_format($this->irr($item) * 100, 1)."%";
        $output[$key]['tvpi'] = number_format($this->tvpi($item), 2)."x";
        $output[$key]['dpi'] = number_format($this->dpi($item), 2)."x";
        $output[$key]['rvpi'] = number_format($this->rvpi($item), 2)."x";
        $output[$key]['unfunded'] = $this->currency->symbol.number_format($this->unfundedAmount($item), $this->currency->decimal_digits);
        $output[$key]['called'] = number_format($this->called($item) * 100, 1)."%";
      });
    }

    return collect($output);
  }

}
