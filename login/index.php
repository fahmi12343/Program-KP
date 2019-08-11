<!DOCTYPE html>
<html lang="en">
  
<head>
	
    <meta charset="utf-8">
    <title>Login - Bootstrap Admin Template</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="../assets/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				LabKom ICT Universitas Budi Luhur				
			</a>		
			
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->




	<div class="account-container">
		
		<div class="content clearfix">
			
				<form method="post" class="form-vertical" action="act_log.php?op=in">
			
				<h1>Login</h1>		
				
				<div class="login-fields">
					
					<p>Please provide your details</p>
					
					<div class="field">
						<label for="nim">nim</label>
						<input type="text" id="nim" name="nim" value="" placeholder="nim" class="login username-field" />
					</div> <!-- /field -->
					
					<div class="field">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
					</div> <!-- /password -->
					
				</div> <!-- /login-fields -->
				
				<div class="login-actions" >
					<!--	<button class="button btn btn-success btn-large">Sign In</button>-->
					<button class="button btn btn-success btn-large"><input type="submit" class="flip-link btn btn-success" value="Login" name="submit" /></button>
					
				</div> <!-- .actions -->
				
				
				
			</form>
			
		</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
