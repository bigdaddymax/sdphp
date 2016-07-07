<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'document_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'sort_order',
  ];
  
}
