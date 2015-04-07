<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallery  Page</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>

    <h1> Hello Kindly upload your Photo !!!</h1>
    
    
    <br> {{ Form::open( array( 'route' => ['galleries.store'], 'files'=>true ) ) }}
     <br>{{ Form::file('profilephoto','',array('Placeholder'=>'Profile Photo')) }}<br>
     <strong>kindly upload profile photo here </strong>
     <br>{{ Form::button('Save', ['type' => 'submit']) }}<br>
   

{{ Form::close() }}    
<a href="http://localhost/jobsportal/public/users/logout">Logout</a> 
</body>
    
</html>

