<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	// Relationship for has many posts
	public function posts()
	{
		return $this->hasMany('Post');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	// Set user rules

	public static $rules = array(
		'email' => 'required|max:200|unique:users|email',
		'first_name' => 'required|max:50',
		'last_name' => 'required|max:50',
		'password' => 'required|min:7',
		'password_confirm' => 'required|same:password'
		);


	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	// Mutator to lower-case emails
	public function setUsernameAttribute($value)
	{
    	$this->attributes['username'] = strtolower($value);
	}

	// Mutator to lower-case first name
	public function setFirstNameAttribute($value)
	{
    	$this->attributes['first_name'] = strtolower($value);
	}

	// Mutator to lower-case emails
	public function setLastNameAttribute($value)
	{
    	$this->attributes['last_name'] = strtolower($value);
	}	

	// Mutator to hash passwords
	public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = Hash::make($value);
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}


}