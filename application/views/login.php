
<html>
<head>
<title>PowerSteels ERP</title>

<body> 

<div class = "container row" style = "margin-top:6%;"> 
	<div class = "col-md-4"> </div>
	<div id="bod"  class = "col-md-4 wow zoomInLeft" data-wow-delay="0.3s" > 

		<h1 align="center"><small>PowerSteels</small> <br/>ERP </h1> <hr/>
		<?php echo form_open('Login/logmein', ['class' => 'form-signin', 'role' => 'form', 'align' => 'center']); ?>
			<div id="log" class = "form-group">

			<label class ="lblshade" for="un">Username : </label><br/>	
			<?php echo form_input(['name' => 'username','type' => 'text', 'id' => 'un', 'class' => 'form-control', 'placeholder' => 'Username']);?>

			<label class ="lblshade" for="password">Password : </label><br/>	
			<?php echo form_password(['name' => 'password', 'type' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
		
			<button id="bb" class = "btn btn-md animated shake" style="margin:auto;margin-top: 15px; display:block; float:center; border-radius:5px; padding-left:15px;padding-right:15px;" type="submit" name="login"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Login</button>
			</div>
		<?php echo form_close(); ?>
	</div>
	<div class ="col-md-4"> </div>
</div>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
<!- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
              <script>
               wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
              </script>
</body>


</html>