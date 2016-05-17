<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'organizations';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'short_name',
    'primary_organization_type_id',
    'website',
  ];
}
