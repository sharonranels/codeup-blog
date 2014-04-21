<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'UserController@showUser');
	|
	*/

	public function create() {
		return View::make('users.create')->with('user', new User());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		Log::info('The function store() in the UsersController was called');
		// create the validator
		$validator = Validator::make(Input::all(), User::$rules);

    	// attempt validation
		if ($validator->fails())
		{
			
			Session::flash('errorMessage', "User could not be created - see form errors");
        // validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput()->withErrors($validator);
			
		} else {

			// Save to db
			$user = new User();
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->password = Input::get('password');
			$user->admin = Role::ROLE_USER;
			$user->save();
			Auth::login($user);
			Session::flash('successMessage', "User created successfully");
			return Redirect::action('PostsController@index');
		}


	}


}
