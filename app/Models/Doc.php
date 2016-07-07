<?php

namespace App\Models;

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
    'file_type'
  ];
  
  protected $touches = ['clients', 'funds', 'types'];
  
  public function clients() {
      return $this->belongsToMany('App\Models\Client', 'document_clients', 'document_id', 'client_id');
  }
  
  public function funds() {
      return $this->belongsToMany('App\Models\Fund', 'document_funds', 'document_id', 'fund_id');
  }
  
  public function types() {
      return $this->belongsToMany('App\Models\Type', 'document_document_type', 'document_id', 'document_type_id');
  }
}
