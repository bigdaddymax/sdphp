<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'investment_operations';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'investment_id',
    'investment_operation_type_id',
    'date',
    'amount',
    'currency',
    'fx_rate_override',
  ];

  protected $dates = [
    'created_at',
    'updated_at',
    'date',
  ];

  protected $appends = array('timestamp');

  public function getTimestampAttribute()
  {
    return $this->date->getTimestamp();
  }

  public function investment()
  {
    return $this->belongsTo('App\Investment', 'investment_id', 'id');
  }

  public function type()
  {
    return $this->belongsTo('App\OperationType', 'investment_operation_type_id', 'id');
  }
}
