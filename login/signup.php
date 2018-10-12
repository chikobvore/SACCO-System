<?php
  require '../dbh/dbh.php';
  require '../php/processor.php';
  ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <title>Login Form</title>
  <script src="js/prefixfree.min.js"></script>
  <link href="../../layout/styles/login.css" rel="stylesheet" type="text/css" media="all">

</head>

<script type="text/javascript">
	function verify() {
		// body...
	
	 var name = document.getElementById('1').value;
	 var surname = document.getElementById('2').value;
	 var staff_id = document.getElementById('3').value;
	 var p1 = document.getElementById('4').value;
	 var p2 = document.getElementById('5').value;

	 if (name == ''||surname ==''|| staff_id ==''|| p1 ==''||p2 == '') {
	 	document.getElementById('alert').textContent = "Please fill all the fields";
	 	return false
	 }
	 else if(p1 !== p2)
	 {
	 	document.getElementById('alert').textContent = "Password doesnt match";
	 	return false;
	 }
	 else
	 {
	 	return true;
	 	
	 }

	}
</script>
<body>

  <div class="body" style="background: url('../../images/demo/backgrounds/banner.jpg');"></div>
		<div class="grad"></div>
		<div class="header">

			<div>
				<center>
					<h1>SACCO BANKING SYSTEM</h1>
				</center></div>
		</div>
		<br>
		<div class="login">
		<p class="alert" id="alert"></p>

		<form onsubmit="return verify()" action="../php/sign.php" method="POST" >

		<input type="text" placeholder="First Name" name="Name" id="1"><br>
		<input type="text" placeholder="Surname" name="surname" id="2"><br>
		<input type="text" placeholder="staff_id" name="Staff_id" id="3"><br>
		<input type="password" placeholder="password" name="p1" id="4"><br>
		<input type="password" placeholder="password" name="p2" id="5"><br>
		<input type="Submit" value="Sign Up"><br/>
		</form>
		
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>