<?php
  require '../dbh/dbh.php';
  require '../php/processor.php';         
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Application</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link href="../../layout/styles/form.css" rel="stylesheet" type="text/css" media="all">
  <link href="../../layout/styles/switchery.min.css" rel="stylesheet" type="text/css" media="all">
  <script type="text/javascript" src="../js/switchery.min.js"></script>
<script type="text/javascript">
    function save()
    {
/*
        var ref = Math.floor(Math.random()*100000);
        var a = document.getElementById('1').value;
        var b = document.getElementById('2').value;
        var c = document.getElementById('3').value;
        var d = document.getElementById('4').value;
        var e = document.getElementById('5').value;
        var g = document.getElementById('6').value;
        var h = document.getElementById('7').value;
        var i = document.getElementById('8').value;
        var j = document.getElementById('9').value;
        var k = document.getElementById('10').value;
        var l = document.getElementById('11').value;
        var m = document.getElementById('12').value;
        var n = document.getElementById('13').value;


            if(isNaN(c))
            {
                alert("invalid Phone Number");
                return false;
            }
            else if (isNaN(d))
            {
                alert("invalid Salary Amount")
                return false;
            }
            else if (isNaN(j))
            {
                alert("invalid loan amount");
                return false;
            }
            else if (isNaN(k))
            {
                alert("invalid Interest rate");
                return false;

            }
            else
            {
                var email = document.getElementById('4');
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                if(email.value.match(mailformat))
                {
                   return true;
                }
                else
                {
                    alert("you have entered an invalid email address");
                    return false;
                }

            }
               

                */
                alert("Success!");
                return true;
        }
        
</script>
</head>

<body style="background: url('../../images/demo/backgrounds/1.jpg');">
  <div id="wrapper" >
  
  <h1>Registry Form</h1>
  
 <form method="POST" onsubmit="return save()" action=insertdata.php>
  <div class="col-3">
    <label>
      Name
      <input placeholder="Enter first name" id="0" tabindex="1" name="Name" required="Name required">
    </label>
  </div>
  <div class="col-3">
    <label>
      Surname
      <input placeholder="Enter surname" id="1" tabindex="1" name="Surname" required="Surname required">
    </label>
  </div>
  <div class="col-3">
    <label>
      Date of Birth
      <input type="se" placeholder="day-month-year" id="2" tabindex="2" name="dob" required="Date of Birth required">
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Id-Number
      <input placeholder="00-000000-A-00" id="3" tabindex="3" name="id_num" required=" Id-Number required">
    </label>
  </div>
  
   <div class="col-3">
    <label>
      Physical Address
      <input  id="4" tabindex="3" name="address" required="Address required">
    </label>
  </div>
  <div class="col-3">
    <label>
      Email Address
      <input placeholder="me@example.com" id="5"  tabindex="4" name="email" required="Email required">
    </label>
  </div>

  <div class="col-2">
    <label>
      Phone number
      <input placeholder="+263 700 000 000" id="6"  tabindex="4" name="phone" required="Phone number required">
    </label>
  </div>
  <div class="col-2">
    <label>
      Gender
      <select tabindex="5" name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </label>
  </div>


 <div class="col-3">
    <label><b><ul>Next of Kin</ul></b>
      <input placeholder="Name?" name="kin_name" tabindex="1" id="7" required="details required">
    </label>
  </div>
  <div class="col-3">
    <label>Surname
      <input name="kin_surname" id="8" required="Next of Kin surname required">
    </label>
  </div>
  <div class="col-3">
    <label>
      physical Address
      <input placeholder="Address?" id="9" name="kin_address" tabindex="2" required="Next of Kin address required">
    </label>
  </div>
  
  <div class="col-2">
    <label>
      Phone Number
      <input placeholder="Contact" name="kin_phone" tabindex="3" id="10" required="Next of Kin  Contact details required">
    </label>
  </div>
  <div class="col-2">
    <label>
      Email
      <input placeholder="email" name="kin_email"  tabindex="4" id="11" required="Next of Kin email required">
    </label>
  </div>

    <div class="col-3">
    <label>
      Work details
      <select tabindex="5" name="Department">
        <option value="Registry">Registry</option>
        <option value="Finance">Finance</option>
        <option value="ICT">ICT</option>
        <option value="Client">Member</option>

    </label>
  </div>

    <div class="col-3">
    <label>
        <input placeholder="Occupation" id="12" name="Occupation" required="">
    </label>
  </div>

   <div class="col-3">
    <label>
        <input placeholder="supervisor" id="13" name="supervisor" required="">
    </label>
  </div>


  <div class="col-submit">
    <button class="submitbtn" onclick="save()">Submit Form</button>
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