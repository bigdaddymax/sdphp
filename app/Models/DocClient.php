<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocClient extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'document_clients';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'document_id',
    'client_id',
  ];
  
}
