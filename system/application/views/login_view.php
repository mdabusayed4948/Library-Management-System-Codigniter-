<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Signin</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    
        <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" type="text/css">

    
    
    
    
  </head>

  <body>

    <body>
<div class="container">
	<section id="content">
	<div><a href="http://dev.intels.co/sayed/"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>Return to Project Gallery</a></div>
            <form action="<?php echo base_url();?>index.php/user/login" method="post">
			
			<h1>Login Form</h1>
          <h2>Library Management System</h2>
                            
			<div>
            <input type="text" name="txtUsername"  placeholder="Username" required id="username" />
			</div>
			<div>
            <input type="password"  name="pwdPassword" placeholder="Password" required id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<!--<a href="#">Lost your password?</a>-->
				<!---<a href="#">Register</a>-->
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">For Username & Password</a>
                          <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Click Here</button>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
    
        <script src="<?php base_url();?>js/index.js"></script>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <span style='float:left'> <h4 class="modal-title">Welcome To My Library  Management System(LMS)</h4></span>
				
          
	   </div>
        <div class="modal-body">
	<p><strong>Username:</strong>  admin</p>
		<p><strong>Password:</strong>  admin</p>
		

       
        </div>
		        
		  
        <div class="modal-footer">
		 
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
  </body>
</html>

