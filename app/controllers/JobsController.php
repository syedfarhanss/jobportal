<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of jobs
	 *
	 * @return Response
	 */
	public function index()
	{
                $auth_user_id = Auth::user()->id;  
                
		$jobs = Job::where('user_id','=',$auth_user_id)->get();
                //$jobs = Job::all();
		return View::make('jobs.index', compact('jobs'));
	}
       
        
       public function showall($id)
	{
		$job = Job::findOrFail(all);

		return View::make('jobs.show', compact('job'));
	}
	/**
	 * Show the form for creating a new job
	 *
	 * @return Response
	 */
	public function create()
	{
                //  $auth_user_id = Auth::user()->id;    
                //   $all_data = Input::all();
         
		return View::make('jobs.create');
	}

	/**
	 * Store a newly created job in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
           /*
            $auth_user_id = Auth::user()->id;    
            echo $auth_user_id;
        
            print_r(Confide::user()); exit;
            */
	/*	$validator = Validator::make($data = Input::all(), Job::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Job::create($data);

		return Redirect::route('jobs.index');
	}
         * 
         */
        $auth_user_id = Auth::user()->id;   
       
         $all_data = Input::all();
    
        $job = new Job();
        $job->jobtitle = $all_data['jobtitle'];
        $job->jobdescription = $all_data['jobdescription'];
        $job->joblocation = $all_data['joblocation'];
        $job->salary = $all_data['salary'];
        $job->user_id=$auth_user_id;
      //  $job->resume=$filename;
        $job->save();
       

		return View::make('jobs.create');
	}
        
	/**
	 * Display the specified job.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$job = Job::findOrFail($id);

		return View::make('jobs.show', compact('job'));
	}

	/**
	 * Show the form for editing the specified job.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$job = Job::find($id);

		return View::make('jobs.edit', compact('job'));
	}

	/**
	 * Update the specified job in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	  /*	$job = Job::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Job::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$job->update($data);

		return Redirect::route('jobs.index');
	}
           * 
           */
            
        $job = Job::findorFail($id);
        $all_data=Input::all();
           
        $job->jobtitle=$all_data['jobtitle'];
        $job->jobdescription=$all_data['jobdescription'];
        $job->joblocation=$all_data['joblocation'];
        $job->salary=$all_data['salary'];
      //  $job->user_id=$all_data['salary'];
        $job->save(); 
        
        
             return Redirect::to('jobs/show');
        }
        
      /*  public function postSearch()
{
    $q = Input::get('query');
 
    $posts = $this->post->whereRaw(
        "MATCH(title,body) AGAINST(? IN BOOLEAN MODE)", 
        array($q)
    )->get();
    return View::make('posts.index', compact('posts'));
}
       * 
       */


	/**
	 * Remove the specified job from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $job = Job::findorFail($id);
            $job->delete();
            return Redirect::to('jobs/show');
      
	}

}
      
