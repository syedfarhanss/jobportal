<?php

class GalleriesController extends \BaseController {

	/**
	 * Display a listing of galleries
	 *
	 * @return Response
	 */
	public function index()
	{
		$galleries = Gallery::all();

		return View::make('galleries.index', compact('galleries'));
	}
        
       

	/**
	 * Show the form for creating a new gallery
	 *
	 * @return Response
	 */
	public function create()
	{
            
		return View::make('galleries.create');
	}

	/**
	 * Store a newly created gallery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 $filename=time()."_".Input::file('profilephoto')->getClientOriginalName();    
       // $data = fread(Input::file('file')->getRealPath());    
        Input::file('profilephoto')->move('profilephoto/',$filename);
        
        $all_data = Input::all();
          
        $gallery = new Gallery();
       // $resume->resumetitle = $all_data['resumetitle'];
       // $resume->resumedescription = $all_data['resumedescription'];
         $gallery->profilephoto=$filename;
        $gallery->save();
      

		Return View::make('galleries.index');
	}

	/**
	 * Display the specified gallery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gallery = Gallery::findOrFail($id);

		return View::make('galleries.show', compact('gallery'));
	}

	/**
	 * Show the form for editing the specified gallery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gallery = Gallery::find($id);

		return View::make('galleries.edit', compact('gallery'));
	}

	/**
	 * Update the specified gallery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$gallery = Gallery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Gallery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$gallery->update($data);

		return Redirect::route('galleries.index');
	}

	/**
	 * Remove the specified gallery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Gallery::destroy($id);

		return Redirect::route('galleries.index');
	}

}
