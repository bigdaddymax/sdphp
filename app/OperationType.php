<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationType extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'investment_operation_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'group',
    'cashflow',
    'name_sort_order',
    'group_sort_order',
  ];

  public function scopeCashflowsOnly($query)
  {
    return $query->where('cashflow', 1);
  }

  public function operations()
  {
    return $this->hasMany('App\Operation', 'investment_operation_type_id', 'id');
  }

}
