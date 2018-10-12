<?php
 require '../dbh/dbh.php';
 require '../php/processor.php';

if (isset($_POST['account']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['payment'])  && isset($_POST['amount'])&&  isset($_POST['contact']))
          {
                    $account = $_POST['account'];
                     $sql = "SELECT Name,surname from Client_register where Account_number = $account ";
                     $result = mysqli_query($Conn,$sql);
                     $id = mysqli_num_rows($result);
                     if ($id>0) {
                      addfinance();
                     }else {
                      echo "Error: " .$sql. "<br>" . $Conn->error;
                       # code...
                     }
     }else{
          echo "Error: " . "<br>" . $Conn->error;
               }