<?php
 require '../dbh/dbh.php';


 $username = $_POST['name'];
 $surname = $_POST['surname'];
 $paddress = $_POST['address'];
 $dob = $_POST['dob'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $id_num = $_POST['id'];
 $account= $_POST['account'];

 $sql = "UPDATE Client_register SET Name = '$username',
		Surname  = '$surname',
		Physical_address = '$paddress',
		Email_address = $email,
		National_id = '$id',
		Dob = '$dob' 
		WHERE Account_number = '$account'";

if ($Conn->query($sql) === TRUE)
		{
			header("location: ../Registry/registry_clients.php");
		}else
		{
			echo "Error: " . $sql . "<br>" . $Conn->error;
		}