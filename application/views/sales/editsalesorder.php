
<html>
<head> 
<title>Edit Sales Order</title>

<meta charset="utf-8">
<style>

.btn_circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn_circle .btn_lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn_circle .btn_xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}

	
.panel > .panel-heading {
		background-image: none;
		background: #f5f5f5 !important;
		border-bottom:#f5f5f5 !important ;

	}

	.panel-body{
  border-bottom:2px solid #f5f5f5;
  padding:10px;
  margin:0;
}


.panel {

	border:none !important	;
	box-shadow: none !important;
}

	
</style>

</head>

<body> 
<header>
	
	<nav class="navbar navbar-default" style="margin-bottom:0;">
  <div class="container-fluid">
    <div class="navbar-header">

     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


      <a id="space" class="navbar-brand" href="#">
      </i> <small><i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>&nbsp PowerSteels</small> ERP
      </a>
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     	


     </div>

  </div>
</nav>
</header>
<div class = "container content-panel row">
	<div id="sidebar" class="nav nav-bar navbar-fixed  col-md-1" >
		<ul id="sidenav" style="padding-left:20px;">
		
			<li><a data-toggle="tooltip" data-placement="right" title="Dashboard" href="<? echo site_url('Swifter/index');?>" ><i class="fa fa-tachometer fa-2x black" aria-hidden="true"></i></a></li>
			<li><a data-toggle="tooltip" data-placement="right" title="Sales" href="<? echo site_url('Swifter/Order');?>" class="selected" ><i class="fa fa-first-order fa-2x  red" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-briefcase fa-2x  black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-users fa-2x black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-location-arrow fa-2x  black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-book fa-2x  black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-credit-card-alt fa-2x black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-home fa-2x black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-money fa-2x black" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-universal-access fa-2x black" aria-hidden="true"></i></a></li>
		</ul>

	</div>	

	<div class="col-md-10" style="float:right;">

	<div class="container-fluid row">
	<h2>Sales Order</h2>
	<ol class="breadcrumb">
		<li><a href="<? echo site_url('Swifter/order');?>">Sales</a></li>
		<li><a href="<? echo site_url('sales/Sales_controller/index');?>">Sales Order</a></li>
		<li class="active">Edit Sales Order</li>
	</ol>

	  <div class="panel panel-default">
			<div class="panel-heading lead">Edit Sales Order</div>
					<div class="panel-body table-responsive" >
					

						
			</div>
		</div>

					

	</div>

</div>

<!-- Edit Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Sales Order</h4>
      </div>
      <div class="modal-body">
       <input type="text" name="id"/>
 
      </div>
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>

  </div>
</div>
 

 <!-- View Modal -->
<div id="view" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	 <button type="button" class="btn btn-default close"><i class="fa fa-print fa-2x"></i></button>
       
        <h4 class="modal-title">Sales Order</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     

      </div>
    </div>

  </div>
</div>





<link rel="stylesheet" type ="text/css" href="<?php echo base_url('css/style.css');?>"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
<script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo site_url('js/tooltip.js'); ?>"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">
	
$(document).ready(function(){

 $('button.update').click(function(){
   var hi = $(this).data('id');
    console.log(hi);

   $('input[name=id]').val(hi);
   
    });

 });
</script>

</body>

	
</html>