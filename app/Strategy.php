<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'strategies';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'asset_class',
    'sector',
    'sub_sector',
    'asset_class_sort_order',
    'sector_sort_order',
    'sub_sector_sort_order',
  ];

  public function funds()
  {
    return $this->hasMany('App\Fund', 'strategy_id');
  }
}
