<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->paginate(4);
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
        // validation failed, redirect to the post create page with validation errors and old inputs
        return Redirect::back()->withInput()->withErrors($validator);
    	
    	} else {
			
			// Save to db

			$post = new Post();

			$post->title = Input::get('title');
			$post->body = Input::get('body');

			$post->save();
			
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
        // validation failed, redirect to the post create page with validation errors and old inputs
        return Redirect::back()->withInput()->withErrors($validator);
    	
    	} else {
			
			// Save to db

			

			$post->title = Input::get('title');
			$post->body = Input::get('body');

			$post->save();
			
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
		return Redirect::action('PostsController@index');
	}

}