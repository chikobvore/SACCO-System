<?php
 require '../dbh/dbh.php';
 require '../dbh/Bcrypt.php';
 // hash the password => returns hashed password
   // Bcrypt::hashPassword($password);
    
    // check $password against the $hashedPassword => returns true/false
  //  Bcrypt::checkPassword($password, $hashedPassword);
  if (isset($_POST['Name']) && isset($_POST['surname']) && isset($_POST['Staff_id']) && isset($_POST['p1']) && isset($_POST['p2'])) 
  {

              $username = $_POST['Name'];
              $surname = $_POST['surname'];
              $Staff_id = $_POST['Staff_id'];
              $p1 = $_POST['p1'];
              $p2 = $_POST['p2'];

              if ($p1 === $p2){

                $pass = Bcrypt::hashPassword($p1);
                $sql = "SELECT Name From registry_department WHERE Staff_id = '$Staff_id'";
                $result = mysqli_query($Conn,$sql);
                $confirm = mysqli_num_rows($result);

                if ($confirm>0)
                {
                  $sql ="UPDATE registry_department SET password ='$pass'  WHERE Staff_id = '$Staff_id'";
                  if ($Conn->query($sql) === TRUE)
                  {
                                    header("location: ../login/login.php");  
                  }else
                       {
                                    echo "Error: " . $sql ."<br>" . $Conn->error;
                        }

                }else{

                          $sql = "SELECT Name From client_register WHERE Account_number = '$Staff_id'";
                          $result = mysqli_query($Conn,$sql);
                          $confirm = mysqli_num_rows($result);

                          if ($confirm>0)
                          {
                              $sql ="UPDATE client_register SET password ='$pass' WHERE Account_number = '$Staff_id'";
                              if ($Conn->query($sql) === TRUE)
                              {
                                                header("location: ../login/login.php");  
                              }else
                                   {
                                                echo "Error: " . $sql ."<br>" . $Conn->error;
                                    }
                            # code...
                          }else
                                {

                                  $sql = "SELECT Name From finance_register WHERE Stafff_id = '$Staff_id'";
                                  $result = mysqli_query($Conn,$sql);
                                  $confirm = mysqli_num_rows($result);

                                  if ($confirm>0)
                                  {
                                    $sql ="UPDATE finance_register SET password ='$pass'  WHERE Stafff_id = '$Staff_id'";
                                    if ($Conn->query($sql) === TRUE)
                                    {
                                                      header("location: ../login/login.php");  
                                    }else
                                         {
                                                      echo "Error: " . $sql ."<br>" . $Conn->error;
                                          }
                                  }else
                                       { 
                                        echo "Access Denied ";
                                        }
                        }
              }
  }
            
}
  