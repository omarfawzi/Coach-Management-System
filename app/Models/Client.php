<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 13 Oct 2017 09:35:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $username
 * @property string $firstName
 * @property string $lastName
 * @property string $picture
 * @property string $gender
 * @property string $jobTitle
 * @property int $coachID
 * @property int $companyID
 * @property int $groupID
 * @property string $service
 * @property int $deleted
 * @property \App\Models\Company $company
 * @property \App\Models\Group $group
 * @property \App\User $user
 * @property \Carbon\Carbon registered
 * @property \Illuminate\Database\Eloquent\Collection $financials
 * @property \Illuminate\Database\Eloquent\Collection $sessions
 * @property \Illuminate\Database\Eloquent\Collection $strengthpoints
 *
 * @package App\Models
 */
class Client extends Eloquent
{
    public $timestamps = false;

    protected $casts = [
		'coachID' => 'int',
		'companyID' => 'int',
		'groupID' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'password',
		'phone',
		'username',
		'firstName',
		'lastName',
		'picture',
		'jobTitle',
		'coachID',
		'companyID',
		'groupID',
        'service',
        'registered',
        'gender',
        'deleted'
	];

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class, 'companyID');
	}

	public function group()
	{
		return $this->belongsTo(\App\Models\Group::class, 'groupID');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'coachID');
	}

	public function financials()
	{
		return $this->hasMany(\App\Models\Financial::class, 'clientID');
	}

	public function sessions()
	{
		return $this->hasMany(\App\Models\Session::class, 'clientID');
	}

	public function strengthpoints()
	{
		return $this->hasMany(\App\Models\Strengthpoint::class, 'clientID');
	}
}
