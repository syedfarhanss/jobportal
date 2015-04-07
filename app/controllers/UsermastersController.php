<?php

class UsermastersController extends \BaseController {

	/**
	 * Display a listing of usermasters
	 *
	 * @return Response
	 */
	public function index()
	{
		$usermasters = Usermaster::all();

		return View::make('usermasters.index', compact('usermasters'));
	}

	/**
	 * Show the form for creating a new usermaster
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usermasters.create');
	}

	/**
	 * Store a newly created usermaster in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usermaster::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usermaster::create($data);

		return Redirect::route('usermasters.index');
	}

	/**
	 * Display the specified usermaster.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usermaster = Usermaster::findOrFail($id);

		return View::make('usermasters.show', compact('usermaster'));
	}

	/**
	 * Show the form for editing the specified usermaster.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usermaster = Usermaster::find($id);

		return View::make('usermasters.edit', compact('usermaster'));
	}

	/**
	 * Update the specified usermaster in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usermaster = Usermaster::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usermaster::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usermaster->update($data);

		return Redirect::route('usermasters.index');
	}

	/**
	 * Remove the specified usermaster from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usermaster::destroy($id);

		return Redirect::route('usermasters.index');
	}

}
