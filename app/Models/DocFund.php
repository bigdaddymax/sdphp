<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocFund extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'document_funds';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'document_id',
    'fund_id'
  ];
}
