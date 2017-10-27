<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 09:35:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Strengthpoint
 * 
 * @property int $id
 * @property string $name
 * @property int $clientID
 * 
 * @property \App\Models\Client $client
 *
 * @package App\Models
 */
class Strengthpoint extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'clientID' => 'int'
	];

	protected $fillable = [
		'name',
		'clientID'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class, 'clientID');
	}
}
