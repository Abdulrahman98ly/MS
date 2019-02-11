<?php
include("dbconnect.php");
?>
<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Contact | Miglore Sapore</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */

#sm {
text-align:center;
}
input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 40px;
  margin-bottom: 40px;
  margin-left: 18px;

}

input[type=submit]:hover {
  background-color: #d0180c;
}
.submit-button{
  background-color: #d0180c;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/3041.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="about-us.html">About</a></li>
          <li><a href="#">Contact</a></li>
            <li><a href="p-signin.html">login</a></li>
         
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
       <header id="header" class="hoc clear" > 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Miglore Sapore</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="active" href="pages/main_menu.php">Menu</a></li>
          <li><a href="pages/order_page1.php">Order Online</a></li>
          <li><a href="pages/p-signin.html">login</a></li>
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
    <section id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        
      </ul>
      <!-- ################################################################################################ -->
      <h6 class="heading">Contact Us</h6>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
  
   <h2>Contact Information</h2>
        <form method="post" action="c-p.php">
            <label for="name">Name</label>
            <input type="text" name="name" id="Name" placeholder="Enter your name"required="required"/>

            <label for="email">Email</label>
            <input type="text" name="email" id="email"placeholder="Enter your Email" required="required" />

            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Write your subject" />

            <label for="Message">Message</label>
            <textarea name="message" rows="20" cols="20" id="message" placeholder="Write your Message .." required="required"></textarea>
        <input type="submit" name="submit" value="submit" class="submit-button" />
        </form>
      
	<!-- <h2 id="sm" >Social  Media </h2>
     
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