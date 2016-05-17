<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'clients';

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
    'active',
    'file_name',
  ];

  public function people()
	{
		return $this->belongsToMany('App\Person', 'organization_person', 'organization_id', 'person_id');
	}

	public function clientTeams()
	{
		return $this->hasMany('App\ClientTeam', 'organization_id');
	}

}
