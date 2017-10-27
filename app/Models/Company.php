<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 09:35:15 +0000.
 */

namespace App\Models;


use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $manufacture
 * @property string $picture
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property \Illuminate\Database\Eloquent\Collection $groups
 *
 * @package App\Models
 */
class Company extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'manufacture',
		'picture'
	];

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class, 'companyID');
	}

	public function groups()
	{
		return $this->hasMany(\App\Models\Group::class, 'companyID');
	}
}
