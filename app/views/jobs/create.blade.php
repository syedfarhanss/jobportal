<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recruiters Page</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<h1> Jobs Add Page</h1>
 
 <nav class='navbar'>
     <a href="http://localhost/jobsportal/public/jobs/show">CLick Here!!</a> <h>!!To View All Jobs you posted </h>
</nav>
<div>
{{ Form::open( array( 'route' => ['jobs.store'], 'files'=>true ) ) }}
{{ Form::text('jobtitle','',array('Placeholder'=>'JobTitle')) }}
{{ Form::text('jobdescription','',array('Placeholder'=>'JobDescription')) }}
{{ Form::text('joblocation','',array('Placeholder'=>'job location')) }}
{{ Form::text('salary','',array('Placeholder'=>'salary')) }}
{{ Form::button('Save', ['type' => 'submit']) }}
{{ Form::close() }}
<a href="http://localhost/jobsportal/public/users/logout">Logout</a> 
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>

    <body>

        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')
        </div>

    </body>

</div> 
</body>
</html>
<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
	