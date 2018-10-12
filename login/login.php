<?php
  require '../dbh/dbh.php';

?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <title>Login Form</title>
  <script src="js/prefixfree.min.js"></script>
  <link href="../../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="../layout/styles/signup.css"/>
</head>

<body>

  <div class="body" style="background: url('../../images/demo/backgrounds/banner.jpg');"></div>
		<div class="grad"></div>
		<div class="header">

			<div>
				<center>
					<h1>SACCO Banking System</h1>
				</center></div>
		</div>
		<br>
			<div class="login">
			<p id="0"></p>
		<form action="../php/verif.php" method="POST">
			<input type="text" placeholder="username" name="user" id="1"><br>
		    <input type="password" placeholder="password" name="password" id="2"><br>
		    <input type="Submit" value="Login"><br/>
		</form>
		<p>Need an account ?  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a onclick="window.location.href ='signup.php'">
				     <u>Sign Up</u>
			</a>	</p>
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script type="text/javascript">
  	function login(){
  	
  	}
  }

  </script>

</body>

</html>