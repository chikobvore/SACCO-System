<?php
session_start();
if ($_SESSION['Name'] == '' || $_SESSION['Surname'] == '') {

  header("location: ../login/login.php");

}
if ($_SESSION['DPT_ID']!= '9999') {
  echo('Access Denied');
}
  require '../dbh/dbh.php';
  require '../php/processor.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../../layout/styles/mystyle.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +263 775 531 297</li>
        <li><i class="fa fa-envelope-o"></i> info@loanportal.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="about.html">Contact</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="howtoapply">Register</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../../images/demo/backgrounds/1.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="home.html">SACCO Portal</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a  href="#">Services</a></li>
          <li><a href="home.html">Home</a></li>
          <li><a href="fees.html">Fees</a></li>
          <li><a href="howtoapply.html">How to apply</a></li>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="#">Portal <b><?php echo $_SESSION['Name']; ?></b></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Logged in as <br><b><?php echo $_SESSION['Name']."  ".$_SESSION['Surname']; ?></b></h6>
      <nav class="sdb_holder">
        <br><br><br><br>
        <div class="Portalbtn">
  <li><a href="../home/home.html">home</a></li>
                    <br><br>
  <li><a href='../index.html'>Personal Details</a></li><br><br>

   <li><a href='../index.html'>Account History</a></li>
   <br><br>
   
    <li><a href="../login/logout.php">Log out</a></li>
  </div>
    <br><br>
      </nav>
    
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter" style="padding-top: 100px;"> 
              <marquee behavior="scroll" direction="top" class="m001">
                <b>
                  These are the rules of a contract – the important information about the deal you are entering into and your rights as a consumer. They set out what you and the seller must do to complete the contract. Once you enter into a contract, you have accepted the terms and conditions. Make sure you read and understand these. If you are unsure, seek legal help before you sign.
                </b>
              </marquee>
                <h1>Account History</h1>
                        <?php
                        balance();
                         ?>
      <li><a href="#">Apply New Loan</a></li>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../../images/demo/backgrounds/footer.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter">
        <h6 class="title">Contact Us</h6>
        <ul class="nospace linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            47 Castens  Road&amp; Belevedere, harare,
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +263 775  531 297<br>
            +263 773 009 889</li>
          <li><i class="fa fa-fax"></i> +263 4 561 567</li>
          <li><i class="fa fa-envelope-o"></i> info@loanportal.com</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#"> loan portal</a></p>
      <p class="fl_right">  Developed by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Ronny</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Footer Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script type="text/javascript">
  function func()
{


alert("You have successfully logged Out");

    window.location.href = "login.html";

}
</script>
<script src="../../layout/scripts/jquery.min.js"></script>
<script src="../../layout/scripts/jquery.backtotop.js"></script>
<script src="../../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>