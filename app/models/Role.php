<?php

class Role extends BaseModel {

    protected $table = 'roles';


    /**
    * Rules for admin validation
    */
    public static $rules = array(
        'role'      => 'required|max:100',
        );

    public function user()
    {
      return $this->belongsTo('User');
  }

    // user role using constants
  const ROLE_ADMIN = 'y';
  const ROLE_USER = 'n';
  static $ROLES=array(
    array('id' => 'y', 'name' => 'Adminstrator'),  
    array('id' => 'n', 'name' => 'User')
    );



  
}
