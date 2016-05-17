<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocEntity extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'document_entities';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'document_id',
    'entity_type_id',
    'entity_id',
  ];
}
