<?php
 require '../dbh/dbh.php';

 session_start();
 $username = $_SESSION['Staff_id'];

 $sql ="UPDATE registry_department SET Status = 'OFFLINE' WHERE Staff_id = '$username'";
 if ($Conn->query($sql) === TRUE)
 	{
 		session_destroy();
		header("location: ../login/login.php");     
    }else{ 

    	  $sql ="UPDATE finance_department SET Status = 'OFFLINE' WHERE Staff_id = '$username'";
    	  if ($Conn->query($sql) === TRUE)
 			{
 				session_destroy();
				header("location: ../login/login.php");     
    		}else{
    			$sql ="UPDATE client_register SET Status = 'OFFLINE' WHERE Staff_id = '$username'";
			    	  if ($Conn->query($sql) === TRUE)
			 			{
			 				session_destroy();
							header("location: ../login/login.php");     
			    		}
			    		else echo "Error: " . $sql . "<br>" . $Conn->error;

    		}
    	}


