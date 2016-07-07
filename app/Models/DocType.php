<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'document_document_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'document_id',
    'document_type_id',
  ];
  
}
