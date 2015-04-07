<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JOB Page</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<h1> Job Edit Page</h1>
<div>
print_r {{($job)}}
{{ Form::open( array( 'route' => array('jobs.update',$job->id ) ) ) }}
{{ Form::text('jobtitle',$job->jobtitle) }}
{{ Form::text('jobdescription',$job->jobdescription) }}
{{ Form::text('joblocation',$job->joblocation) }}
{{ Form::text('salary',$job->salary) }}
{{ Form::button('Save', ['type' => 'submit']) }}
{{ Form::close() }}
</div> 
</body>
</html>
