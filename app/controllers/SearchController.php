<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
        public function jobSearch()
{
    $q = Input::get('query');
 
   $jobs = $this->jobs->whereRaw(
       "MATCH(jobstitle,joblocation) AGAINST(? IN BOOLEAN MODE)", 
        array($q)
    )->get();

    return View::make('search.index');//, compact('search'));
}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}
        public function autocomplete(){
	$term = Input::get('term');
	
	$results = array();
	
	$queries = DB::table('jobs')
		->where('jobtitle', 'LIKE', '%'.$term.'%')
		->orWhere('joblocation', 'LIKE', '%'.$term.'%')
		->take(5)->get();
	
	foreach ($queries as $query)
	{
	    $results[] = [ 'id' => $query->id, 'value' => $query->jobtitle.' '.$query->joblocation ];
	}
return Response::json($results);
  
 
   //return View ::make('search.index');
}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
