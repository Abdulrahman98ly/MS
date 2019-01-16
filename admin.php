
<?php

$dsn='mysql:host=localhost;dbname=ms';
$user='ms';
$pass='111';

try{

$con = new PDO($dsn,$user,$pass);

$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "<h1>Connected Al hamed lil Alah</h1>";
}

catch(PDOExeption $e)
{
	echo "faild".$e->getmessage();
}


if($_SERVER['REQUEST_METHOD'] == "GET")
{

// check if the user exist in datat base 

$stmt= $con->prepare("select * from users where name= ? and pass= ? ");

$stmt->execute(array($_GET['name'],$_GET['pass']));

$c=$stmt->rowCount();





if($c >0 )
{
	//echo"<h2>welcom abdulrahman</h2>";

	// check if he admin or not   the Admin id =1 only that;
              $stmt= $con->prepare("select admin from users where name=? ");

             $stmt->execute(array($_GET['name']));

             $c=$stmt->rowCount();
             
             $row=$stmt->fetch(PDO::FETCH_ASSOC);

//STTING COOKIES

             ///

setcookie("username",$_GET['name'],time()+3600,"/");
setcookie("pass",$_GET['pass']);

/* check if the cookie works
if(count($_COOKIE) > 0)
echo "GOOD";
else
{
	echo "SORY";
}
*/
            ///    


             if($row['admin'] == 1)
             { 
                   	

             }

             else{
               echo"<h2>YOU ARE NOT ADMIN</h2>".$a;
             	header('location: normal-user.php');
             	exit();
             }


}


else{

	echo"<h2>YOU ARE NOT IN DATA BASE  !!</h2>";
	exit();
}
}

else if($_SERVER['REQUEST_METHOD'] == "POST")
{

	 $stmt= $con->prepare("insert into users (name,pass) values (?,?)");

             


if(  $stmt->execute(array($_POST['name'],$_POST['pass'])) === true )
{ 
	
	
	echo"<script>";
	echo"alert('Done')";
	echo"</script>";
	
	

}

else
{
	echo"<script>";
	echo"alert('Not Done')";
	echo"</script>";
}

}

?>




<!DOCTYPE html>
<!--
Template Name: Bronea
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Bronea</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/admin.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
            <li><a href="../index.html">logout</a></li>
         
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Admin Page</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../index.html">Home</a></li>
          <li><a class="active" href="Edit-menu.php"> Edit Menu</a></li>
             <li><a class="active" href="sarch_for_order.php"> Sarch for order</a></li>
            <!--
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
-->
          
        <!--  <li><a href="#">Link Text</a></li>-->
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <div>
          <!--<p class="heading">Rhoncus integer sodales hendrerit</p>-->
          <h1 class="heading" style="font-size: 73px;"> Welcome ...</h1>  

          <?php

            echo "<h1>". $_COOKIE['username']."</h1>";

          ?>
          <!--<p>Nulla pretium justo nibh non pretium metus gravida vel cras urna quam suscipit sit.</p>-->
        </div>
        <footer>
          <ul class="nospace inline pushright">
          
            <li><button class="btn inverse" onclick="document.getElementById('id01').style.display='block'" style="width:auto; height: 55px">Sign Up New Employee</button></li>
            <li><a class="btn" href="../index.html">log Out</a></li>
          </ul>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!--sign up new employee-->


<div id="id01" class="modal">
  
  <form class="modal-content animate"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter The New  Username" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter The New Password" name="pass" required>
        
      <button type="submit">sign up</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>