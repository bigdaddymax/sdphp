<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'countries';

  // /**
  //  * The attributes that are mass assignable.
  //  *
  //  * @var array
  //  */
  // protected $fillable = [
  //   'name',
  //   'asset_type_id',
  //   'security_type_id',
  //   'website',
  //   'description',
  //   'ticker',
  //   'gics_sector_id',
  //   'country_id',
  // ];

  public function assets()
	{
		return $this->hasMany('App\Asset', 'country_id');
	}
}
