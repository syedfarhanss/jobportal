<?php

class MainsController extends \BaseController {

	/**
	 * Display a listing of mains
	 *
	 * @return Response
	 */
/*	public function index()
	{
		//$mains = Main::all();
             if(Confide::user()) {
                 return View::make('mains.index');
             }
 else {
 return View::make(Config::get('confide::login_form'));     
 }
	}
 * 
 */
        public function index()
	{
              if(Confide::user()) {
                // return View::make('mains.index');
            // }
               // $auth_user_id = Auth::user()->id;  
		//$jobs = Job::where(all)->get();
                $jobs = Job::all();
		return View::make('jobs.index', compact('jobs'));
	}
        }
        
               
        

	/**
	 * Show the form for creating a new main
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mains.index');
	}

	/**
	 * Store a newly created main in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Main::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Main::create($data);

		return Redirect::route('mains.index');
	}

	/**
	 * Display the specified main.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$main = Main::findOrFail($id);

		return View::make('mains.show', compact('main'));
	}

	/**
	 * Show the form for editing the specified main.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$main = Main::find($id);

		return View::make('mains.edit', compact('main'));
	}

	/**
	 * Update the specified main in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$main = Main::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Main::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$main->update($data);

		return Redirect::route('mains.index');
	}

	/**
	 * Remove the specified main from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Main::destroy($id);

		return Redirect::route('mains.index');
	}

}
