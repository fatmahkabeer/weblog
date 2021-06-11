<?php

if(isset($_POST['submit_login'])){
     if(($_POST['user_name']=='@thisisme') && ($_POST['password']=='@056Taf')){
                      header('Location:fatmaform.php');
          } else {
            header('Location:index.php');
          }
       }


?>


<!DOCTYPE html>
<html>
<head>
<title>Log Area</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</head>
<body>

<articale class="container">

<div class="jumbotron">
<h1 style="text-indent: 50px; font-family: BankGothic Md BT; color:#75DDE1;">User Login</h1>
</div>
<div class="col-lg-5"></div>
<div class="col-lg-3">
	<form class="panel-group form-horizontal" role="form" action="loginarea.php" method="post">
		<div class="panel panel-info">
			<div class="panel-heading">Login Area</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="username" class="control-label col-sm-4">User Name</label>
					<div class="col-sm-7">
						<input type="text" id="username" placeholder="Insert Email Address" name="user_name" class="form-control">
					</div>
					</div>
				    <div class="form-group">
						<label for="password" class="control-label col-sm-4">Password</label>
					<div class="col-sm-7">
						 <input type="password" id="password" class="form-control" name="password" placeholder="Insert Your Password">
									</div>
								</div>
					<div class="form-group">
					<div class="col-sm-12">
						<input type="submit" class="btn btn-info btn-block" name="submit_login">
					</div>
				</div>
			</div>
		</div>
	</form>

				
</div>
</articale>
</body>
</html>