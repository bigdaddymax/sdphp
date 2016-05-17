<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'funds';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'portfolio_id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'legal_name',
    'strategy_id',
    'vintage_year',
    'fund_size',
    'fund_size_currency',
    'fund_size_date',
    'description',
    'file_name',
  ];

  public function currency()
  {
    return $this->belongsTo('App\Currency', 'fund_size_currency', 'code');
  }

  public function strategy()
  {
    return $this->belongsTo('App\Strategy', 'strategy_id', 'id');
  }

  public function industries()
  {
    return $this->belongsToMany('App\Industry', 'portfolio_industry', 'portfolio_id', 'industry_id')->withPivot('primary');
  }

  public function primaryIndustries()
  {
    return $this->industries()->wherePivot('primary', '=', 1);
  }

  public function otherIndustries()
  {
    return $this->industries()->wherePivot('primary', '=', 0);
  }

  // public function cashflows()
  // {
  //   return $this->belongsToMany('App\Cashflow', 'investments', 'entity_id', 'id')
  //     ->wherePivot('entity_type_id', '=', 1)
  //     ->withPivot('commitment_amount', 'commitment_currency','commitment_date','investment_status_id');
  // }
}
