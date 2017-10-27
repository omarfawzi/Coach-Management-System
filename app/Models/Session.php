<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 09:35:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Session
 * 
 * @property int $id
 * @property string $description
 * @property \Carbon\Carbon $startDate
 * @property \Carbon\Carbon $endDate
 * @property int $clientID
 * @property int $coachID
 * 
 * @property \App\Models\Client $client
 * @property \App\User $user
 *
 * @package App\Models
 */
class Session extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'clientID' => 'int',
		'coachID' => 'int'
	];

	protected $dates = [
		'startDate',
		'endDate'
	];

	protected $fillable = [
		'description',
		'startDate',
		'endDate',
		'clientID',
		'coachID'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class, 'clientID');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'coachID');
	}
}
