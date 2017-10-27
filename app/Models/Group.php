<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 09:35:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Group
 * 
 * @property int $id
 * @property string $name
 * @property int $companyID
 * 
 * @property \App\Models\Company $company
 * @property \Illuminate\Database\Eloquent\Collection $clients
 *
 * @package App\Models
 */
class Group extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'companyID' => 'int'
	];

	protected $fillable = [
		'name',
		'companyID'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'companyID');
	}

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class, 'groupID');
	}
}
