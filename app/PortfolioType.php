<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioType extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'portfolio_types';

  // /**
  //  * The attributes that are mass assignable.
  //  *
  //  * @var array
  //  */
  // protected $fillable = [
  //   'name',
  //   'sort_order',
  // ];

  public function portfolios()
  {
    return $this->hasMany('App\Portfolio', 'primary_portfolio_type_id');
  }

}
