<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'industries';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
  ];

  public function funds()
  {
    return $this->belongsToMany('App\Fund', 'portfolio_industry', 'industry_id', 'portfolio_id')->withPivot('primary');
  }

  public function scopePrimary($query)
  {
    return $query->where('primary',1);
  }
}
