<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Register</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="js/cv.js"></script>

<style>
body  {
    background-image: url("../images/job.jpg");
    background-color: #cccccc;
    
}
</style>
</head>
<body> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Users signup  Form</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

  <!-- Custom fonts -->
  <link href='http://fonts.googleapis.com/css?family=Chivo:400,400italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <link href="css/MyFontsWebfontsOrderM2917374.css" rel="stylesheet" type="text/css" >
  <!--
  /*
  * MyFonts Webfont Build ID 804745, 2011-05-12T01:34:31-0400
  *
  * The fonts listed in this notice are subject to the End User License
  * Agreement(s) entered into by the website owner. All other parties are
  * explicitly restricted from using the Licensed Webfonts(s).
  *
  * You may obtain a valid license at the URLs below.
  *
  * Webfont: Brandon Grotesque Black
  * URL: http://new.myfonts.com/fonts/hvdfonts/brandon-grotesque/black/
  * Foundry: HVD Fonts
  * Copyright: Copyright (c) 2009 by Hannes von Doehren. All rights reserved.
  * License: http://www.myfonts.com/viewlicense?1056
  * Licensed pageviews: 10,000/month
  * CSS font-family: BrandonGrotesque-Black
  * CSS font-weight: normal
  *
  * (c) 2011 Bitstream Inc
  */ -->

  <!-- Custom stylesheet -->
 

  <div class="container-fluid showcase">
    <div class="container">
      <div class="row">

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /container-fluid -->

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-51931-8', 'auto');
  ga('send', 'pageview');
  </script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    {{ Form::open( array( 'route' => ['users.store'], 'files'=>true ) ) }}
                    
                        
                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                    Username</label>
                             <div class="col-sm-10">
                            {{ Form::text('username','',array('Placeholder'=>'username','class'=>'form-control')) }}
                          </div>
                    </div>
                         <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        
                        <div class="col-sm-10">
                           {{ Form::text('email','',array('Placeholder'=>'email','class'=>'form-control')) }}
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                         
                            Password</label>
                         <div class="col-sm-10">
                            {{ Form::password('password',array('Placeholder'=>'password','class'=>'form-control')) }}
                         </div>
                    </div>
                
                            
                           
                           <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">
                    Conform password</label>
                             <div class="col-sm-10">
                            {{ Form::password('password_confirmation',array('Placeholder'=>'confirm password','class'=>'form-control')) }}
                          </div>
                           </div>
                            <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">
                    Role</label>
                             <div class="col-sm-10">
                            {{ Form::select('role', array(''=>'Choose Role', '2' => 'Jobseeker', '3' => 'Recruiter')) }}
                          </div>
                           </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            {{ Form::button('Join', ['type' => 'submit','class'=>'btn btn-default btn-sm']) }}
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        
                        </div>
                    </div>
                   {{ Form::close() }}
                </div>
                <div class="panel-footer">
                    Sign in!! <a href="http://localhost/jobsportal/public/users/create">Register here</a>
                    <div>     Already Registered <a href="http://localhost/jobsportal/public/users/login">Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
  
  
</body>

</div> 
</body>
</html>





