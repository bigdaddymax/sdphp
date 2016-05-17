<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrossPerformance extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'investment_gross_performance';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'investment_id',
    'currency',
    'entry_date',
    'exit_date',
    'exited',
    'invested_capital',
    'realized_value',
    'unrealized_value',
    'cost_basis',
    'gross_irr',
    'report_date',
  ];

  public function investment()
	{
		return $this->belongsTo('App\Investment', 'investment_id', 'id');
	}

}
