
<?php
 require '../dbh/dbh.php';
 require '../php/processor.php';

if (isset($_POST['Name']) && isset($_POST['Surname']) && isset($_POST['address']) &&  isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['dob']) && isset($_POST['id_num']) && isset($_POST['Gender']) && isset($_POST['Department']))
          {

               $dpt = $_POST['Department'];
               if ($dpt ==="Registry") {
                    $sqli = "select * from registry_department";
                     $result = mysqli_query($Conn,$sqli);
                     $confirm = mysqli_num_rows($result) + 1;

                     $Staff_id = "180"."001"."$confirm";
                     add_reg_data($Staff_id);

                    # code...
               }elseif ($dpt ==="Finance") {
                    $sqli = "select * from finance_register";
                     $result = mysqli_query($Conn,$sqli);
                     $confirm = mysqli_num_rows($result) + 1;

                     $Staff_id = "180"."002"."$confirm";
                     add_fin_data($Staff_id);
                    # code...
               }elseif ($dpt ==="ICT") {
                    $sqli = "select * from ict_register";
                     $result = mysqli_query($Conn,$sqli);
                     $confirm = mysqli_num_rows($result) + 1;

                     $Staff_id = "180"."003"."$confirm";
                     echo "Sorry Department is still under maintance";
                }else
                {
                  $sqli = "select * from Client_register ";
                     $result = mysqli_query($Conn,$sqli);
                     $id = mysqli_num_rows($result)+1;
                     $confirm = mysqli_num_rows($result) + 5;
                     $num = random_int(10000,99999);
  

                     $Staff_id = "1800"."$num";
                     addclient($Staff_id,$id);
                }

               

     }else{
          echo "Please ensure that all details are set";
               }

?>