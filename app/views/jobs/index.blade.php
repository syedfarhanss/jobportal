<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JOB  Page</title>
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
                <th>Job Title</th>
                <th>Job Description</th>
                <th>location</th>
                <th>Salary</th>
                <th>View</th>
                <th>Edit</th>
	        <th>Delete</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Job Title</th>
                <th>Job Description</th>
                <th>location</th>
                <th>Salary</th>
                <th>View</th>
                <th>Edit</th>
	        <th>Delete</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach($jobs as $job)
            <tr>
                
                <td>{{ $job->jobtitle }}</td>
                <td>{{ $job->jobdescription }}</td>
                <td>{{ $job->joblocation }}</td>
                <td>{{ $job->salary }}</td>
                  <td>{{ HTML::link('/users/'.$job->id, 'VIEW', array('id' => $job->id))}}</td>
                <td>{{ HTML::link('/users/'.$job->id.'/edit', 'EDIT', array('id' => $job->id))}}</td>
		<td>{{ HTML::link('/users/'.$job->id.'/delete', 'DELETE', array('id' => $job->id,'onclick'=> 'alert("hello are you sure want to delete?");'))}}</td>
                    
            </tr> 
			@endforeach		            
        </tbody>
    </table>
</body>
</html>
<html> 
	  <head> 
	    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
	    <title>Search  Contacts</title> 
	  </head> 
	  <p><body> 
	    <h3>Search  JObs  Details</h3> 
            <p>You  may search either by <strong>joblocation or jobname</strong></p> 
	    <form  method="post" action="search.php?go"  id="searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
	  </body> 
	</html> 
	</p> 

