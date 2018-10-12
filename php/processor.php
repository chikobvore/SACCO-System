<?php   
function registry()
{
	require '../dbh/dbh.php';
	$sql ="SELECT Name,Surname,Staff_id,Phone_number,email_address,physical_address FROM registry_department";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
          while ($row = mysqli_fetch_assoc($result))
           {
            echo "<li href = 'registry.php'>"."<tr>"."<td>".$row['Name']."</td>"."<td>".$row['Surname']."</td>"."<td>".$row['Staff_id']."</td>"."<td>".$row['Phone_number']."</td>"."<td>".$row['email_address']."</td>"."<td>".$row['physical_address']."</td>"."</tr>"."</li>";

            # code...
          }
          # code...
        }
}
function balance()
{
  require '../dbh/dbh.php';
  $Account =$_SESSION['Account_number'];
  $sql ="SELECT Account_number,Balance FROM Finance_department where Account_number = '$Account'";

        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
          while ($row = mysqli_fetch_assoc($result))
           {
            
              echo "<h1>"."Account :"."</h1>".$row['Account_number']."<br>"."<b>"."Balance : "."</b>".$row['Balance'];
          }
        }else{
            echo "<b>"."Account :"."</b>".$Account."<br>"."<b>"."Balance : "."</b>"."No record found";;
          }

        }

function search($name)
{
  require 'database/dbh.php';
  $sql ="SELECT Name,Surname,Account_number,Phone_number,email_address,physical_address FROM Client_register where Name = $name or Surname = $name or Account_number = $name";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
          while ($row = mysqli_fetch_assoc($result))
           {
            echo "<li href = 'registry.php'>"."<tr>"."<td>".$row['Name']."</td>"."<td>".$row['Surname']."</td>"."<td>".$row['Account_number']."</td>"."<td>".$row['Phone_number']."</td>"."<td>".$row['email_address']."</td>"."<td>".$row['physical_address']."</td>"."</tr>"."</li>";

            # code...
          }
          # code...
        }
}
function signup()
{
  require '../dbh/dbh.php';
  require '../php/processor.php';
  if (isset($_POST['Name']) && isset($_POST['Surname']) && isset($_POST['Staff_id']) && isset($_POST['p1']) && isset($_POST['p2'])) {

              $username = $_POST['Name'];
              $surname = $_POST['Surname'];
              $Staff_id = $_POST['Staff_id'];
              $p1 = $_POST['p1'];
              $p2 = $_POST['p2'];

              if ($p1 === $p2){
                  $sql ="INSERT INTO registry_department (password) Values ($p1) where Name = $username, Surname =$surname ,Staff_id = $Staff_id";
                  if ($Conn->query($sql) === TRUE) {
                                     header("location: login.php");
                              }
                              else{
                                    echo "Error: " . $sql . "<br>" . $Conn->error;
                              }
                # code...
              }

              

    # code...
  }
}
 function add_reg_data($Staff_id)
               {
                    require '../dbh/dbh.php';

                      $username = $_POST['Name'];
                     $surname = $_POST['Surname'];
                     $paddress = $_POST['address'];
                     $dob = $_POST['dob'];
                     $phone = $_POST['phone'];
                     $email = $_POST['email'];
                     $id_num = $_POST['id_num'];
                     $gender = $_POST['Gender'];
                     $dpt = $_POST['Department'];

                    $sql = "INSERT INTO registry_department (Name,Surname,Physical_address,Phone_number,Email_address,Id_Number,Dob,Gender,Staff_id,Status)
                                  VALUES ('$username', '$surname','$paddress','$phone','$email', '$id_num','$dob','$gender','$Staff_id','OFFLINE')";

                    if ($Conn->query($sql) === TRUE) {
                    if (isset($_POST['kin_name']) && isset($_POST['kin_surname']) && isset($_POST['kin_address']) && isset($_POST['kin_phone'])&& isset($_POST['kin_email']) ) {

                         $username = $_POST['kin_name'];
                         $surname = $_POST['kin_surname'];
                         $paddress = $_POST['kin_address'];
                         $phone = $_POST['kin_phone'];
                         $email = $_POST['kin_email'];

                         $sql = "INSERT INTO registry_relatives (Name,Surname,physical_address,phone_number,email_address,Staff_id)
                              VALUES ('$username', '$surname','$paddress','$phone','$email', '$Staff_id')";

                              if ($Conn->query($sql) === TRUE) {
                                     header("location: ../registry/registry.php");
                              }
                              else{
                                    echo "Error: " . $sql . "<br>" . $Conn->error;
                              }



                         # code...
                    }
                 
               } else {
                   echo "Error: " . $sql . "<br>" . $Conn->error;
               }

               $Conn->close();
               }

function add_fin_data($Staff_id)
               {
                    require '../dbh/dbh.php';

                     $username = $_POST['Name'];
                     $surname = $_POST['Surname'];
                     $paddress = $_POST['address'];
                     $dob = $_POST['dob'];
                     $phone = $_POST['phone'];
                     $email = $_POST['email'];
                     $id_num = $_POST['id_num'];
                     $gender = $_POST['Gender'];
                     $dpt = $_POST['Department'];

                    $sql = "INSERT INTO finance_register (Name,Surname,Physical_address,Phone_number,Email_address,Id_Number,DOB,Gender,Stafff_id,Status)
                                  VALUES ('$username', '$surname','$paddress','$phone','$email', '$id_num','$dob','$gender','$Staff_id','OFFLINE')";

                    if ($Conn->query($sql) === TRUE) {
                    if (isset($_POST['kin_name']) && isset($_POST['kin_surname']) && isset($_POST['kin_address']) && isset($_POST['kin_phone'])&& isset($_POST['kin_email']) ) {

                         $username = $_POST['kin_name'];
                         $surname = $_POST['kin_surname'];
                         $paddress = $_POST['kin_address'];
                         $phone = $_POST['kin_phone'];
                         $email = $_POST['kin_email'];

                         $sql = "INSERT INTO finance_relatives (Name,Surname,physical_address,phone_number,email_address,Staff_id)
                              VALUES ('$username', '$surname','$paddress','$phone','$email', '$Staff_id')";

                              if ($Conn->query($sql) === TRUE) {
                                     header("location: ../registry/registry.php");
                              }
                              else{
                                    echo "Error: " . $sql . "<br>" . $Conn->error;
                              }



                         # code...
                    }
                 
               } else {
                   echo "Error: " . $sql . "<br>" . $Conn->error;
               }

               $Conn->close();
               }

function addclient($Staff_id,$id)
               {
                    require '../dbh/dbh.php';

                      $username = $_POST['Name'];
                     $surname = $_POST['Surname'];
                     $paddress = $_POST['address'];
                     $dob = $_POST['dob'];
                     $phone = $_POST['phone'];
                     $email = $_POST['email'];
                     $id_num = $_POST['id_num'];
                     $gender = $_POST['Gender'];
                     $dpt = $_POST['Department'];

                    $sql = "INSERT INTO Client_register (Name,Surname,Physical_address,Contact,Email_address,National_id,Dob,Gender,Account_number,Client_id,Status)
                                  VALUES ('$username', '$surname','$paddress','$phone','$email', '$id_num','$dob','$gender','$Staff_id','$id','OFFLINE')";
 
                    if ($Conn->query($sql) === TRUE){
                    if (isset($_POST['kin_name']) && isset($_POST['kin_surname']) && isset($_POST['kin_address']) && isset($_POST['kin_phone'])&& isset($_POST['kin_email']) ) {

                         $username = $_POST['kin_name'];
                         $surname = $_POST['kin_surname'];
                         $paddress = $_POST['kin_address'];
                         $phone = $_POST['kin_phone'];
                         $email = $_POST['kin_email'];

                         $sql = "INSERT INTO Client_relatives (Name,Surname,physical_address,phone_number,email_address,Client_id)
                              VALUES ('$username', '$surname','$paddress','$phone','$email','$id')";

                              if ($Conn->query($sql) === TRUE) {
                                     header("location: update.html");
                              }
                              else{
                                    echo "Error: " . $sql . "<br>" . $Conn->error;
                              }



                         # code...
                    }
                 
               } else {
                   echo "Error: " . $sql . "<br>" . $Conn->error;
               }

               $Conn->close();
               }

function Clients ()
{
  require '../dbh/dbh.php';
  $sql ="SELECT Name,Surname,Account_number,email_address,physical_address,Contact FROM Client_register";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
          while ($row = mysqli_fetch_assoc($result))
           {
            echo "<tr>"."<td>".$row['Name']."</td>"."<td>".$row['Surname']."</td>"."<td>".$row['Account_number']."</td>"."<td>".$row['email_address']."</td>"."<td>".$row['physical_address']."<td>".$row['Contact']."</td>"."</td>"."</tr>";

            # code...
          }
          # code...
        }
}
function finance ()
{
  require '../dbh/dbh.php';
  $sql ="SELECT Name,Surname,Account_number,Transaction_date,Transaction_time,Transaction,Amount FROM Finance_histories";
        $result = mysqli_query($Conn,$sql);
        $confirm = mysqli_num_rows($result);

        if ($confirm>0) {
          while ($row = mysqli_fetch_assoc($result))
           {
            echo "<tr>"."<td>".$row['Transaction_time']."<br>".$row['Transaction_date']."</td>"."<td>".$row['Name']."</td>"."<td>".$row['Surname']."</td>"."<td>".$row['Account_number']."</td>"."<td>".$row['Transaction']."<td>".$row['Amount']."</td>"."</td>"."</tr>";

            # code...
          }
          # code...
        }
}
function addfinance()
               {
                    require '../dbh/dbh.php';

                     $username = $_POST['name'];
                     $surname = $_POST['surname'];
                     $Account = $_POST['account'];
                     $Contact = $_POST['contact'];
                     $Amount = $_POST['amount'];
                     $payment = $_POST['payment'];
                     $date =date('Y/m/d');
                     $time = date('h:i:sa');

                    $sql = "INSERT INTO Finance_histories(Name,Surname,Account_number,Amount,Transaction,Transaction_date,Transaction_time)
                                  VALUES ('$username', '$surname','$Account','$Amount', '$payment','$date','$time')";

                    if ($Conn->query($sql) === TRUE) {
                            $sql ="SELECT Balance FROM Finance_department where Account_number ='$Account'";
                            $result = mysqli_query($Conn,$sql);
                            $confirm = mysqli_num_rows($result);

                            if ($confirm>0) {
                              while ($row = mysqli_fetch_assoc($result))
                               {
                                $new_amount = $row['Balance'] + $Amount;
                                $sql ="UPDATE Finance_department SET Balance ='$new_amount' WHERE Account_number = '$Account'";
                                    if ($Conn->query($sql) === TRUE)
                                    {
                                                      header("location: ../finance/finance.php");  
                                    }
                                    else
                                    {
                                       echo "Error: " . $sql . "<br>" . $Conn->error;
                                    }
                              }
                            }else{
                               $sql = "INSERT INTO Finance_department(Date,Account_number,Debit,Balance)
                                  VALUES ('$date', '$Account','$Amount','$Amount')";
                                  if ($Conn->query($sql) === TRUE)
                                  {
                                    header("location: ../finance/finance.php");  
                                  }
                                   else {
                                            echo "Error: " . $sql . "<br>" . $Conn->error;
                                          }

                            }             
                    } else {
                   echo "Error: " . $sql . "<br>" . $Conn->error;
               }

               $Conn->close();
               }

     