<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstitutionType extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'institution_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'sort_order',
  ];

  public function organizations()
	{
		return $this->hasMany('App\Organization', 'organization_id');
	}

  public function clients()
	{
		return $this->hasMany('App\Client', 'organization_id');
	}

  public function institutions()
	{
		return $this->hasMany('App\Institution', 'organization_id');
	}
}
