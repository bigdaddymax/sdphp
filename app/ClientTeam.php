<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientTeam extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'client_teams';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'organization_id',
  ];

  public function client()
	{
		return $this->belongsTo('App\Client', 'organization_id');
	}

  public function people()
	{
		return $this->belongsToMany('App\Person', 'client_team_person', 'organization_id', 'person_id');
	}
}
