<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Department of B.C.A</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>  
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/style_.css">
 <link rel="stylesheet" href="css/style_.scss">
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>

function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>  
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#" style="float: right; class="btn sub1" data-toggle="modal" data-target="#myModal">Login</a></li>
      <li><a href="#" data-toggle="modal" data-target="#login">Admin</a></li>
    </ul>
  </div>
</nav>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Login</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
</form>
      </div>
    </div>
  </div>
</div>

<div class="bg1">
<div class="row">
<div class="col-md-7"><div class="txt" contenteditable="true">NOTITA</div></div>
<div class="col-md-4 panel">
  <form class="form-horizontal register-form" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="floatLabel" for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Name" class="form-control input-md" type="text">
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="floatLabel" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="floatLabel" for="name"></label>  
  <div class="col-md-12">
  <select name="college" id="college" placeholder="Department" class="form-control input-md">
      <option value="B.Com">Select your Dept.</option>
      <option value="B.Com Comp">B.Com Comp</option>
      <option value="B.Com Corp.">B.Com Corp.</option>
      <option value="B.Com Finance">B.Com Finance</option>
      <option value="B.Sc Maths">B.Sc Maths</option>
      <option value="B.S.W">B.S.W</option>
      <option value="B.B.A">B.B.A</option>
</select>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="floatLabel title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Email ID" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="floatLabel" for="mob"></label>  
  <div class="col-md-12">
  <!--<input id="mob" name="mob" placeholder="Mobile Number" class="form-control input-md" type="number"> -->
  <select name="mob" id="mob" placeholder="Year" class="form-control input-md">
      <option value="1">Year</option>
      <option value="1">1st Year</option>
      <option value="2">2nd Year</option>
      <option value="3">3rd Year</option>
</select>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="floatLabel" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="floatLabel" for=""></label>
  <div class="col-md-12"> 
    <button  type="submit" class="btn btn-primary">Register</button>
  </div>
</div>

</fieldset>
</form>
</div></div>
</div>


</div>
</div>
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Login</span></h4>
</div>

<div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="40"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row footer" style="padding-top: 4px; padding-left: 24px;">
<p style="color: white; float: left;">&copy; Copyright Department of Computer Application, DBASC.</p>
</div>
<script src="js/jquery.min.js"></script>
    <script src="js/main_.js"></script>
    <script>
      $('[data-text]').on('keyup', function(){
  $(this).attr('data-text', $(this).text());
});
</script>