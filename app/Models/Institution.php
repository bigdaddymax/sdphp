<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'institutions';

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
    'institution_type_id',
  ];
}
