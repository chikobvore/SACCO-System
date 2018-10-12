<?php
session_start();
if ($_SESSION['Name'] == '' || $_SESSION['Surname'] == '') {

  header("location: ../login/login.php");
}

if ($_SESSION['DPT_ID']!= '0100') {
  echo('Access Denied');
  header("location: ../login/login.php");
}
  require '../dbh/dbh.php';
  require '../php/processor.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registry Department</title>
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
        <li><i class="fa fa-envelope-o"></i> info@SACCOBankingSystem.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="about.html">Contact</a></li>
        <li><a href="login.html">notifications</a></li>
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
        <h1><a href="home.html">SACCO Banking System</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a  href="#">Registry Department</a></li>
          <li><a href="registry_Clients.php" ">Members</a></li>
         <li><a class="drop" href="#">Staff</a>
            <ul>
              <li><a href="#">Registry Department</a></li>
              <li><a class="drop" href="#">Finance Department</a>
                <ul>
                  <li><a href="#">Accountants</a></li>
                  <li><a href="#">Bank Tellers</a></li>
                  <li><a href="#">Loan Officers</a></li>
                </ul>
              </li>
              <li><a class="drop" href="#">ICT Department</a>
                <ul>
                  <li><a href="#"> Software Developers</a></li>
                  <li><a href="#">Database Adminstrators</a></li>
                  <li><a href="#">System Adminstrators</a></li>
                </ul>
              </li>


              
            </ul>
          </li>
          <li><a href="howtoapply.html">Managers</a></li>
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
      <li><a href="#">Registry department</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Logged in as <b><?php echo $_SESSION['Name']."  ".$_SESSION['Surname']; ?></b><br>
      </b></h6>
      <nav class="sdb_holder">
        <br><br><br><br>
        <div class="Portalbtn">

   <li><a href="update.html">Update</a></li><br><br>

   <li><a href="application.php">New Member</a></li><br><br>

    <li><a href="update.html">Delete</a></li><br><br>

   <li><a href="update.html">Search</a></li><br><br>

     <li><a href="../login/logout.php">Log out</a></li><br><br>

  </div>
      </nav>
    
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>Registry Staff</h1>
      <div class="scrollable">
        
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Surname</th>
              <th>Staff Id</th>
              <th>Contact</th>
              <th>Email address</th>
              <th>Physical address</th>
            </tr>
          </thead><?php
          

          registry();
     ?>
        
        </table>
      </div>
      <!-- ################################################################################################ -->
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
      <p class="fl_right">  Developed by <a target="_blank" href="#" title="Free Website Templates">Nyasha Chikobvore</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../../layout/scripts/jquery.min.js"></script>
<script src="../../layout/scripts/jquery.backtotop.js"></script>
<script src="../../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>