<?php
session_start();
if ($_SESSION['Name'] == '' || $_SESSION['Surname'] == '') {

  header("location: ../login/login.php");
}
  require '../dbh/dbh.php';
  require '../php/processor.php';
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Updating</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link href="../../layout/styles/form.css" rel="stylesheet" type="text/css" media="all">
  <link href="../../layout/styles/switchery.min.css" rel="stylesheet" type="text/css" media="all">
  <script type="text/javascript" src="../../layout/js/switchery.min.js"></script>
</head>
<script type="text/javascript">
  function checkForm(form)
  {
    // regular expression to match required date format
    re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    alert(form);

    if(form.startdate.value != '' && !form.startdate.value.match(re)) {
      alert("Invalid date format: " + form.startdate.value);
      form.startdate.focus();
      return false;
    }
    else{
      return true;
    }

    /* regular expression to match required time format
    re = /^\d{1,2}:\d{2}([ap]m)?$/;

    if(form.starttime.value != '' && !form.starttime.value.match(re)) {
      alert("Invalid time format: " + form.starttime.value);
      form.starttime.focus();
      return false;
    }

    alert("All input fields have been validated!");
    return true;*/
  }
    function save()
    {
      var form = document.getElementById('3').value;
      checkForm(form);
        /*else
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

        }*/


      }
  </script>

<body  style="background: url('../../images/demo/backgrounds/1.jpg');">
  <div id="wrapper">
  
  <h1>Updating</h1>
  
  <form action="updating.php" method="POST">
  <div class="col-2">
    <label>
      Name
      <input placeholder="Name?" id="1" name="name" tabindex="1">
    </label>
  </div>
  <div class="col-2">
    <label>
      Surname
      <input placeholder="Surname" id="2" name="surname" tabindex="2">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Dob
      <input placeholder="Date of birth" id="3" name="dob" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      National id/birth Certificate number
      <input  id="4" name="id" tabindex="4">
    </label>
  </div>
  <div class="col-3">
    <label>
      Physical address
           <input  id="5" name="address" tabindex="5">

    </label>
  </div>
  <div class="col-4">
    <label>
      email address
      <input placeholder="me@example.com" id="6" name="email" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Phone Number
      <input placeholder="+263 700 000 000" id="8" name="phone" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Account Number
      <input placeholder="000 000 000" id="7" name="account" tabindex="6">
    </label>
  </div>
  
  <div class="col-submit">
    <button class="submitbtn" onclick="save()">Submit</button>
  </div>
  
  </form>
  </div>
  
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>