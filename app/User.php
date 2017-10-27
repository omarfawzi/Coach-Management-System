<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 11 Oct 2017 09:12:20 +0000.
 */

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $picture
 * @property string $about
 * @property string $role
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $parentID
 * 
 * @property \App\User $user
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property \Illuminate\Database\Eloquent\Collection $sessions
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App
 */
class User extends Authenticatable
{
	protected $casts = [
		'parentID' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'picture',
		'about',
		'role',
		'remember_token',
		'parentID'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'parentID');
	}

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class, 'coachID');
	}

	public function sessions()
	{
		return $this->hasMany(\App\Models\Session::class, 'coachID');
	}

	public function users()
	{
		return $this->hasMany(\App\User::class, 'parentID');
	}
}
