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
<a  href="http://localhost/jobsportal/public/users/logout">Logout </a>
               
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>profilephoto</th>
                <th>View</th>
                <th>Edit</th>
	        <th>Delete</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                 <th>profilephoto</th>
                <th>View</th>
                <th>Edit</th>
	        <th>Delete</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach($profiles as $profile)
            <tr>
                
                <td>{{ $profiles->profile }}</td>
                 <td>{{ HTML::link('/users/'.$profile->id, 'VIEW', array('id' => $profile->id))}}</td>
                <td>{{ HTML::link('/users/'.$profile->id.'/edit', 'EDIT', array('id' => $profile->id))}}</td>
		<td>{{ HTML::link('/users/'.$profile->id.'/delete', 'DELETE', array('id' => $profile->id,'onclick'=> 'alert("hello are you sure want to delete?");'))}}</td>
                    
            </tr> 
			@endforeach		            
        </tbody>
    </table>
</body>
</html>
