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

    // Helper to assign images to posts an handle upload
    public function assignImage($inputFile)
    {
        if (Input::hasFile('image'))
            {
                $destinationPath = public_path() . '/uploads/';
                $extension = $inputFile->getClientOriginalExtension();
                $fileName = uniqid() . '.' . $extension;
                $inputFile->move($destinationPath, $fileName);
                $this->attributes['post_image'] = '/uploads/' . $fileName;
            }
    }


}
