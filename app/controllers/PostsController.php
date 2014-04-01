<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		//run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search', '');
		$posts = Post::with('user')
		->orderBy('created_at', 'desc')
		->where('title', 'LIKE', "%{$search}%")
		->orWhere('body', 'LIKE', "%{$search}%")
		// ->orWhere('email', 'LIKE', "%{$search}%")
		->paginate(4);
		return View::make('posts.index')->with(array('posts' => $posts));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create')->with('post', new Post());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

    	// attempt validation
    	if ($validator->fails())
    	{
        
    		Session::flash('errorMessage', "Post could not be created - see form errors");
        // validation failed, redirect to the post create page with validation errors and old inputs
        	return Redirect::back()->withInput()->withErrors($validator);
    	
    	} else {
			
			// Save to db

			$post = new Post();
			$post->user_id=1;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', "Post created successfully");
			
			return Redirect::action('PostsController@index');
	    }


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$post = Post::findOrFail($id);

		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

    	// attempt validation
    	if ($validator->fails())

    	{
        	Session::flash('errorMessage', "Post could not be changed - see form errors");
        	// validation failed, redirect to the post create page with validation errors and old inputs
        	return Redirect::back()->withInput()->withErrors($validator);
    	
    	} else {
			
			// Save to db

			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', "Post was successfully changed");
			
			return Redirect::action('PostsController@show', $post->id);
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id)->delete();
		Session::flash('successMessage', "Delete was successful");
		return Redirect::action('PostsController@index');
	}

}