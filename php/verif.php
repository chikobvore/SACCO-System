<?php
 require '../php/processor.php';
 require '../dbh/dbh.php';
 require '../dbh/Bcrypt.php';


if(isset($_POST['user']) && isset($_POST['password']))
{
	$username = $_POST['user'];
	$password = $_POST['password'];

	$sql ="SELECT Name,Surname,Status,password,Staff_id FROM registry_department WHERE Staff_id = $username ";

	$result = mysqli_query($Conn,$sql);
	if ($result->num_rows >0)

	{
		while($row = $result->fetch_assoc())
		{
			$verification =Bcrypt::checkPassword($password,$row['password']);

	        if ($verification)
	        {
	        	if ($row['Status'] === 'OFFLINE') {
	        		  $sql ="UPDATE registry_department SET Status = 'ONLINE' WHERE Staff_id = $username";
                                    if ($Conn->query($sql) === TRUE)
                                    {
                                    		session_start();
								        	$_SESSION['Name'] = $row['Name'];
								        	$_SESSION['Surname'] = $row['Surname'];
								        	$_SESSION['Staff_id'] = $row['Staff_id'];
								        	$_SESSION['DPT_ID'] = '0100';
                                            header("location: ../Registry/registry.php");     
                                    }else{
                                    	 echo "Error: " . $sql . "<br>" . $Conn->error;
                                        }

	        	}else{
	        		echo("Your Account is logged in on another device");
	        	}
				
	
			}else {
					header("location: ../login/login.php");
	    			}
    	}
   
	}else
		{
				$sql ="SELECT Account_number,Name,Surname,password FROM client_register WHERE Email_address = $username OR Account_number = $username ";
			    $result = mysqli_query($Conn,$sql);

			    if ($result->num_rows >0)
				{
					while($row = $result->fetch_assoc())
					{
						$verification =Bcrypt::checkPassword($password,$row['password']);

				        if($verification)
				        {
							session_start();
	        				$_SESSION['Name'] = $row['Name'];
	        				$_SESSION['Surname'] = $row['Surname'];
	        				$_SESSION['Account_number'] = $row['Account_number'];
	        				$_SESSION['DPT_ID'] = '9999';
							header("location: ../home/userportal.php");
							 
						}else {
								header("location: ../login/login.php");
	    					  }
					}
				}else {
							$sql ="SELECT Name,Surname,password FROM finance_register WHERE Stafff_id = $username ";
						    $result = mysqli_query($Conn,$sql);

						    if ($result->num_rows >0)

							{
								while($row = $result->fetch_assoc())
								{
									$verification =Bcrypt::checkPassword($password,$row['password']);

							        if($verification)
							        {
										session_start();
				        				$_SESSION['Name'] = $row['Name'];
				        				$_SESSION['Surname'] = $row['Surname'];
				        				$_SESSION['DPT_ID'] = '0200';
										header("location: ../finance/finance.php");
							    	}else
			    						{
			    							header("location: ../login/login.php");
			    							}
			    				}
			    			}else
			    			{
			    				header("location: ../login/login.php");
			    			}
				}	
			}
}
	

