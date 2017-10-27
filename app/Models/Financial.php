<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 09:35:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Financial
 * 
 * @property int $id
 * @property int $cost
 * @property int $paid
 * @property string $pricing
 * @property string $currency
 * @property \Carbon\Carbon $updated_at
 * @property int $clientID
 * 
 * @property \App\Models\Client $client
 *
 * @package App\Models
 */
class Financial extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'cost' => 'int',
		'paid' => 'int',
		'clientID' => 'int'
	];

	protected $fillable = [
		'cost',
		'paid',
		'pricing',
		'clientID',
        'currency'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class, 'clientID');
	}
}
