<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'portfolios';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'portfolio_type_id',
    'client_id',
    'reporting_currency',
    'benchmark_id',
  ];

  public function primaryType()
  {
    return $this->belongsTo('App\PortfolioType', 'primary_portfolio_type_id');
  }

}
