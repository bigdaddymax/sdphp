<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientTeamPerson extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'client_team_person';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'client_team_id',
    'person_id',
  ];

  public function team()
	{
		return $this->belongsTo('App\ClientTeam', 'organization_id');
	}

  public function person()
	{
		return $this->belongsTo('App\Person', 'person_id');
	}
}
