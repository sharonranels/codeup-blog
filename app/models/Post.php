<?php

use Carbon\Carbon;

class Post extends BaseModel {

    protected $table = 'posts';


    // Define relationship to user (author)
    public function user()
    {
    	return $this->belongsTo('User');
    }

    // Validation rules

    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}



}
