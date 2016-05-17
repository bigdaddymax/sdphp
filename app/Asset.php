<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'assets';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'primary_asset_type_id',
    'website',
    'description',
    'country_id',
  ];

  public function company()
	{
		return $this->hasOne('App\Company', 'asset_id');
	}

  public function primaryType()
	{
		return $this->belongsTo('App\AssetType', 'primary_asset_type_id');
	}

  public function country()
  {
    return $this->belongsTo('App\Country', 'country_id');
  }
}
