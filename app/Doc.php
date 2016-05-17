<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'documents';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'file_name',
    'document_date',
    'date_received',
    'original_file_name',
  ];
}
