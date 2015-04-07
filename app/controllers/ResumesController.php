<?php

class ResumesController extends \BaseController {

	/**
	 * Display a listing of resumes
	 *
	 * @return Response
	 */
	public function index()
	{
		//$resumes = Resume::all();

		return View::make('resumes.index');
	}

	/**
	 * Show the form for creating a new resume
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('resumes.create');
	}

	/**
	 * Store a newly created resume in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
                 
	/*	$validator = Validator::make($data = Input::all(), Resume::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
         * 
         */
      
            
            
        
        $filename=time()."_".Input::file('resumeupload')->getClientOriginalName();    
        Input::file('resumeupload')->move('resume/',$filename);
        
        $all_data = Input::all();
          
        $resume = new Resume();
        $resume->resumetitle = $all_data['resumetitle'];
        $resume->resumedescription = $all_data['resumedescription'];
        $resume->resumeupload=$filename;
        $resume->save();
      
       
        
	return View::make('resumes.index');
                
           

	}

	/**
	 * Display the specified resume.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$resume = Resume::findOrFail($id);

		return View::make('resumes.show', compact('resume'));
	}

	/**
	 * Show the form for editing the specified resume.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$resume = Resume::find($id);

		return View::make('resumes.edit', compact('resume'));
	}

	/**
	 * Update the specified resume in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$resume = Resume::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Resume::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$resume->update($data);

		return Redirect::route('resumes.index');
	}

	/**
	 * Remove the specified resume from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Resume::destroy($id);

		return Redirect::route('resumes.index');
	}

}
