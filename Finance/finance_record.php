<?php
session_start();
if ($_SESSION['Name'] == '' || $_SESSION['Surname'] == '') {

  header("location: ../login/login.php");
}
if ($_SESSION['DPT_ID']!= '0200') {
  echo('Access Denied');
}
  require '../dbh/dbh.php';
  require '../php/processor.php';
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>registering</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link href="../../layout/styles/form.css" rel="stylesheet" type="text/css" media="all">
  <link href="../../layout/styles/switchery.min.css" rel="stylesheet" type="text/css" media="all">
  <script type="text/javascript" src="../../layout/js/switchery.min.js"></script>
</head>

<body  style="background: url('../../images/demo/backgrounds/1.jpg');">
  <div id="wrapper">
  
  <h1>Finance Department</h1>
  
  <form action="../php/financedata.php" method="POST">
  <div class="col-3">
    <label>
      Account Number
      <input placeholder="000 000 000" id="1" name="account" tabindex="1">
    </label>
  </div>
    <div class="col-3">
    <label>
      Name
      <input placeholder="Payee Name" id="1" name="name" tabindex="1">
    </label>
  </div>
    <div class="col-3">
    <label>
      Surname
      <input placeholder="Surname" id="1" name="surname" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
      Payment Method
      <select tabindex="5" name="payment">
        <option value="Cash">Cash</option>
        <option value="Eco-cash">Eco-cash</option>
        <option value="Tele-cash">Tele-cash</option>
        <option value="One Wallet">One Wallet</option>
        <option value="Zipit">Zipit</option>
        <option value="Transfer">Transfer</option>
      </select>
    </label>
  </div>
  
  <div class="col-2">
    <label>
      Amount
      <input placeholder="Amount" id="3" name="amount" tabindex="3">
    </label>
  </div>
  <div class="col-4">
    <label>
      Contact
           <input  id="5" name="contact" tabindex="5">

    </label>
  </div>
  <div class="col-4">
    <label>
      email address
      <input placeholder="me@example.com" id="6" tabindex="6">
    </label>
  </div>
    <div class="col-submit">
    <button class="submitbtn" onclick="save()">Save changes</button>
  </div>
  </form>
  </div>
  <script type="text/javascript">
    function save()
    {
        var a = document.getElementById('1').value;
        var b = document.getElementById('2').value;
        var c = document.getElementById('3').value;
        var d = document.getElementById('4').value;
        var e = document.getElementById('5').value;
        var g = document.getElementById('6').value;
        var h = document.getElementById('7').value;

        if( a == ""||b==''||c==''||d==''||e ==''|| g ==''|| h == '')
        {
            alert("please fill all the fields");
        }
        else
        {
          if(isNaN(d))
            {
                alert("invalid Loan Amount");
            }
            else if (isNaN(e))
            {
                alert("invalid Interest rate")
            }
            else if (isNaN(g))
            {
                alert("invalid reference number");
            }
            else
            {
                        alert("Loan application was succesful")
            }

        }


      }
  </script>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>