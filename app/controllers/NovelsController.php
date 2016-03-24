<?php

class NovelsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$novels = Novel::all();
		return View::make('index')->with('novels', $novels);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'title'			=> 'required',
			'author'		=> 'required',
			'year'			=> 'required|numeric'
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('novels/create')
				->withErrors($validator)
				->withInput(Input::except('synopsis'));
		}
		else{
			$novel = new Novel;
			$novel->title       = Input::get('title');
            $novel->author      = Input::get('author');
            $novel->year 		= Input::get('year');
            $novel->synopsis 	= Input::get('synopsis');
            $novel->save();

            Session::flash('message', 'Successfully added novel!');
            return Redirect::to('novels');
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
		$novel = Novel::find($id);
		return View::make('show')->with('novel', $novel);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$novel = Novel::find($id);
		return View::make('edit')->with('novel', $novel);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'title'			=> 'required',
			'author'		=> 'required',
			'year'			=> 'required|numeric'
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('novels/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('synopsis'));
		}
		else{
			$novel = Novel::find($id);
			$novel->title       = Input::get('title');
            $novel->author      = Input::get('author');
            $novel->year 		= Input::get('year');
            $novel->synopsis 	= Input::get('synopsis');
            $novel->save();

            Session::flash('message', 'Successfully updated novel!');
            return Redirect::to('novels');
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
		$novel = Novel::find($id);
		$novel->delete();

		Session::flash('message', 'Successfully deleted the novel.');
		return Redirect::to('novels');
	}


}
