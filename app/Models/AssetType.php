<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetType extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'asset_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'sort_order',
  ];

  public function assets()
	{
		return $this->hasMany('App\Asset', 'primary_asset_type_id');
	}
}
