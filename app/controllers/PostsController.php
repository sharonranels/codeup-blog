<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		//run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);

		//run an auth
		$this->beforeFilter('isAdmin', array('only' => array('edit', 'update', 'destroy')));
	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search', '');
		$posts = Post::select('posts.*', 'users.email')
			->join('users', 'posts.user_id', '=', 'users.id')
			->orderBy('posts.created_at', 'desc')
			->where('title', 'LIKE', "%{$search}%")
			->orWhere('body', 'LIKE', "%{$search}%")
			->orWhere('email', 'LIKE', "%{$search}%")
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
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			if (Input::hasFile('image'))
			{
				$post->assignImage(Input::file('image'));
			}
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
		$user_rights = false;
		$post = Post::findOrFail($id);
		if (Auth::guest()) {
			$user_rights = false;
		}
		elseif (Auth::user()->admin == "y" || $post->user_id == Auth::user()->id) {
			$user_rights = true;
		}
		$array = array('post'=>$post, 'user_rights'=>$user_rights);
		return View::make('posts.show')->with($array);
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
			if (Input::hasFile('image'))
			{
				$post->assignImage(Input::file('image'));
			}
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