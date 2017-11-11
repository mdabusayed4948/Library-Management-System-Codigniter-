<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo ('Library Management System');?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css"/>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  

 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css"/>
 <script src="<?php echo base_url();?>js/script.js"></script>


</head>
<body style=" -moz-linear-gradient(center bottom , #a3a8af, #cfd2d7) repeat scroll 0 0; text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);">
	<div>
    <div>	
     <nav class="navbar navbar-default navbar-fixed-top tbl" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
        <a href="http://dev.intels.co/sayed/lms/index.php/user/display_dashboard" ><img src="<?php echo base_url();?>images/logo4.png " /></a>
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		
      </button>
    </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >  
    <ul class="nav navbar-nav">
    
       <li style="font-size: 25px" > <?php echo anchor("user/display_dashboard","Dashboaed")?></li>
         <li class="activ" style="font-size: 25px; width: 500px"><marquee scrollamount='3'>Library Management System</marquee></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hello, admin</a></li>
      <li><a href="http://dev.intels.co/sayed/lms/"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
      </div>
  </div>
</nav>
  </div>
<div class="row body">
 
  <div class="row">
      
 <!-----------------------side panel-------------------------------->   
 
 <div class="col-md-2" id="leftCol">
      <ul class="nav nav-stacked menu" id="sidebar">
          <div style=" min-height: 45px; background-color: #B5B9BF; margin-bottom: 5px; border-bottom: 1px solid #FFFFFF"><div style="padding: 8px"><span class="style boxshadow" style="text-align: center ;margin-left: 55px; padding: 0px ; ">Welcome</span></div></div>
        <li>
          <a href="#menu1" class="list-group-item"><span class="glyphicon glyphicon-user"></span>  User
            <b class="caret pull-right"></b> <i class="fa fa-caret-down"></i></a>
          <ul class="collapse" id="menu1">
              <li  class="list-group-item"><span class="glyphicon glyphicon-edit"></span>&nbsp; <?php echo anchor("user/user_form","Create User")?><i class="fa fa-caret-down"></i></li>
              <li  class="list-group-item"><span class="glyphicon glyphicon-eye-open"></span>&nbsp; <?php echo anchor("user/display_user"," User List")?><i class="fa fa-caret-down"></i></li>
        
          </ul>
        </li>
       
        <li>
            <a href="#menu3" class="list-group-item"> <span class="glyphicon glyphicon-book"></span>&nbsp;Book
            <b class="caret pull-right"></b> <i class="fa fa-caret-down"></i></a>
          <ul class="collapse" id="menu3">
    
           <li  class="list-group-item"><span class="glyphicon glyphicon-edit"></span>&nbsp; <?php echo anchor("library/book_form","Create Book")?><i class="fa fa-caret-down"></i></li>
             <li  class="list-group-item"><span class="glyphicon glyphicon-eye-open"></span>&nbsp; <?php echo anchor("library/display_book","Book List")?><i class="fa fa-caret-down"></i></li>
          
          </ul>
        </li>
		
				 <li>
            <a href="#menu3" class="list-group-item"><span class="glyphicon glyphicon-user"></span>&nbsp; Member of Library
            <b class="caret pull-right"></b> <i class="fa fa-caret-down"></i></a>
          <ul class="collapse" id="menu3">
                <li  class="list-group-item"><span class="glyphicon glyphicon-edit"></span>&nbsp; <?php echo anchor("library/member_form","Create Member")?><i class="fa fa-caret-down"></i></li>
                   <li  class="list-group-item"><span class="glyphicon glyphicon-eye-open"></span>&nbsp; <?php echo anchor("library/display_member","Member List")?><i class="fa fa-caret-down"></i></li>
         
          </ul>
        </li>
		
		<li>
		
          <a href="#menu3" class="list-group-item"> <span class="glyphicon glyphicon-book"></span>&nbsp;Issue Book
            <b class="caret pull-right"></b> <i class="fa fa-caret-down"></i></a>
		 <ul class="collapse" id="menu3">
		 
           <li  class="list-group-item"><span class="glyphicon glyphicon-edit"></span>&nbsp; <?php echo anchor("library/issue_book","Issue Book  Form")?><i class="fa fa-caret-down"></i></li>
             <li  class="list-group-item"><span class="glyphicon glyphicon-eye-open"></span>&nbsp; <?php echo anchor("library/display_issue_book","Issue Book List")?><i class="fa fa-caret-down"></i></li>
          </ul>
        </li>

		

	
      </ul>
    </div>