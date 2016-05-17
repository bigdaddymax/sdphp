<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'people';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'first_name',
    'last_name',
    'email',
  ];

  public function user()
	{
		return $this->hasOne('User', 'person_id');
	}

}
