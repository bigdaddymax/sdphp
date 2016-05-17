<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'currencies';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'code',
    'name',
    'name_plural',
    'symbol',
    'symbol_native',
    'decimal_digits',
    'rounding',
  ];

  public function funds()
  {
    return $this->hasMany('App\Fund', 'code', 'fund_size_currency');
  }
}
