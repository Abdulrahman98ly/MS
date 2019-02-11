<?php
$db_host="localhost";
$db_username="ms";
$db_password="111";
$db_name="ms";


$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// check connection 
 if(mysqli_connect_error())
{
 echo "faild to  connected to MySql :" .mysqli_connect_error();
}
 //echo "connection successfuly"; 

// select database 

$sql="SELECT * FROM contact ";
$result=mysqli_query($db_connect,$sql);

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
<title>Dashboard | Miglore Sapore</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="height:400px; background-image:url('../images/demo/backgrounds/MIGLIOR.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
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
        <h1><a href="../index.html">Miglior Sapore</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->

        
    </header>


  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <section id="breadcrumb" class="hoc clear">      
      <!-- ################################################################################################ -->
      <h6 class="heading"><br><br></h6>

    </section>
  </div>
 
 <table width="200" style="color: black; ; font-size: 16px;text-align: center;"  >
  <tr style="font-style: bold; "  >
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>

  <tr style="">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>


  
  
  <?php

   while ($contact=mysqli_fetch_array($result)) {
      echo "<tr>";

      echo "<td>".$contact['name']."</td>";
      echo "<td>".$contact['email']."</td>";
      echo "<td>".$contact['subject']."</td>";
      echo "<td>".$contact['message']."</td>";

      echo "</tr>";
   }//end while
  ?>
</table>


<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 

    
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="heading">How to conatct with us</h6>
      <p class="btmspace-30">Suspendisse potenti ut tempus consequat accumsan donec.</p>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Hey AL alandlus , salaheldin &amp; Dahmani
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +218 (91) 444 6690</li>
        <li><i class="fa fa-envelope-o"></i> migloresapore@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Suggested meals</h6>
      <ul class="nospace linklist">
        <li><a href="#">///</a></li>
        <li><a href="#">///</a></li>
        <li><a href="#">///</a></li>
        <li><a href="#">///</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">TOP MEALS</h6>
      <ul class="nospace linklist">
        <li><a href="#">///</a></li>
        <li><a href="#">///</a></li>
        <li><a href="#">///</a></li>
        <li><a href="#">///</a></li>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>