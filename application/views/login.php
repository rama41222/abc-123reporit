<!DOCTYPE html>
<html>
<head>
	<title>PowerSteels ERP</title>
</head>
<body>
<style type="text/css">
	
.error{

	color:red;
	text-align: left;
	font-weight: normal;
}

</style>

<div class="container-fluid row" style="margin-top:15%;">

	<div class="col-md-4"></div>
	<div class="col-md-4">

	<form id="login-form" method="post" action="<?php echo site_url('Login/logMeIn');?>" class="from-group " align="center" style="border: 1px solid #33b5e5; padding:20px; border-radius:10px">

		<div class="form-header">
			
		<h1 align="center"><small>PowerSteels</small> <br/>ERP </h1> <hr/>
		</div>
		<div class="form-group">
		<label for="un">Username</label>
		<input class ="form-control" id="un" type="text" name="username" />
		<span class="help-block"><?php echo form_error('username');?></span>

		</div>
		<div class="form-group">
		<label for="pw">Password</label>
		<input class ="form-control"  id="pw" type="password" name="password"  />
		<span class="help-block"><?php echo form_error('password');?></span>
		</div>
		<hr>
		<button id="ff" class="btn btn-primary" name="login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
	</form>

	</div>


	<div class="col-md-4"></div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('js/jqvalidation.js');?>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>