<?php
session_start();
if ($_SESSION['Name'] == '' || $_SESSION['Surname'] == '') {

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
<link href="../../layout/styles/mystyle.css" rel="stylesheet" type="text/css" media="all">
<link href="../../layout/styles/form.css" rel="stylesheet" type="text/css" media="all">
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../../layout/styles/switchery.min.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
  
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
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
        <li><a href="home.html"><i class="fa fa-lg fa-home"></i></a></li>
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
<div class="bgded overlay" style="background-image:url('../../images/demo/backgrounds/registry.jpg');"> 
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
          <li><a  href="registry.php">Registry Department</a></li>
          <li class="active"><a href="#" ">Members</a></li>
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
      <li><a href="registry.php">Registry department</a></li>
      <li><a href="#">Members</a></li>
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
  <div class="Portalbtn">
    <li><a href="update.html">Update</a></li><br><br>
    <li><a href="application.php">New Member</a></li><br><br>
    <li><a href="#">Delete</a></li><br><br>
    <li><a href="#">Search</a></li><br><br>
    <li><a href="../login/logout.php">Log out</a></li>
  </div>
      </nav>
    
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>Recent registered</h1>
      <div class="scrollable">
        
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Surname</th>
              <th>Account number</th>
              <th>Email address</th>
              <th>Physical address</th>
              <th>Contact</th>
            </tr>
          </thead>
          <?php
        Clients ();

        ?>
        </table>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <H1></H1>
    <form action="" method="POST">

    <div class="col-1">
    <label>
      <input placeholder="Name/Surname/Account number" id="0" tabindex="1" name="Name" required="Name required">
    </label>
  </div>
   <div class="col-submit">
    <button type="submit" class="submitbtn">SEARCH</button>
  </div>
    </form>
    


  </div>
</div>


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
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">SACCO BANKING SYSTEM</a></p>
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
<link href="../../layout/styles/mystyle.css" rel="stylesheet" type="text/css" media="all">
<!-- JAVASCRIPTS -->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script type="text/javascript">
  function func()
{

//alert("You have successfully logged Out");

    //indow.location.href = "login.html";

}
</script>
<script src="../../layout/scripts/jquery.min.js"></script>
<script src="../../layout/scripts/jquery.backtotop.js"></script>
<script src="../../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>