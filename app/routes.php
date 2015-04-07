<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', array('as'=>'users.store','uses'=>'UsersController@store'));
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

Route::get('jobs/show','JobsController@index');
Route::get('jobs/create',array('before'=>'auth','as'=>'jobs.create','uses'=>'JobsController@create'));
Route::post('jobs', array('as'=>'jobs.store','uses'=>'JobsController@store'));
Route::get('jobs/showall','JobsController@showall');

Route::get('users/{id}', array('as'=>'jobs.show','uses'=>'JobsController@show'));
Route::get('users/{id}/edit',array('as'=>'jobs.edit','uses'=>'JobsController@edit'));
Route::post('users/store',array('as'=>'jobs.store','uses'=>'JobsController@store'));
Route::post('users/{id}/update',array('as'=>'jobs.update','uses'=>'JobsController@update'));
Route::get('users/{id}/delete', array('as'=>'jobs.delete','uses'=>'JobsController@destroy'));

Route::get('resumes/add','ResumesController@index');
Route::post('resumes', array( 'as'=>'resumes.store','uses'=>'ResumesController@store'));
Route::get('main','MainsController@index');

Route::get('galleries/add','GalleriesController@index');
Route::post('galleries', array( 'as'=>'galleries.store','uses'=>'GalleriesController@store'));
Route::get('galleries/show','GalleriesController@show');
Route::get('galleries/create','GalleriesController@create');
//Route::post('jobs/search', array('as' => 'Search','uses'=>'SearchController@jobSearch'));
Route::post('search','SearchController@jobSearch');    


Route::get('search/autocomplete', 'SearchController@autocomplete');

Event::listen('user.resgistered', function($user)
{
    //Queue::push('SendEmail@send', array('message' => $message));
    Log::info('New user registered '.$user->id);
    //dd($user);
});
//
//class SendEmail {
//
//    public function fire($job, $data)
//    {
//        // logic to send mail
//        
//        $job->delete();
//    }
//
//}
/*Route::group(array('before' => 'auth'), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});
 * 

 */
 
 
 Route::get('admin', array('before' => 'auth', function()
{
    return View::make('/main');
}));


Route::get('test','TestController@test');