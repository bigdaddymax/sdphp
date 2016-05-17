<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GP extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'general_partners';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'organization_id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'strategy_id',
    'aum',
    'aum_currency',
    'aum_date',
  ];

}
