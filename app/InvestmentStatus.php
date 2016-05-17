<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentStatus extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'investment_statuses';

  // /**
  //  * The attributes that are mass assignable.
  //  *
  //  * @var array
  //  */
  // protected $fillable = [
  //   'name',
  //   'sort_order',
  // ];

  public function investments()
	{
		return $this->hasMany('App\Investment', 'investment_status_id', 'id');
	}

}
