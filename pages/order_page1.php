




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
<title>Order Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
  
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

.sm {
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

.sm:hover {
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
</style>
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
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="../index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="about-us.html">About</a></li>
          <li><a href="c.php">Contact</a></li>
            <li><a href="p-signin.html">login</a></li>
          </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
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
          <li class="active"><a href="../index.html">Home</a></li>
          <li><a class="active" href="main_menu.php">Menu</a></li>
          <li><a href="order_page1.php">Order Online</a></li>
          <li><a href="../index.html#sh">Search</a></li>
          <li><a href="about-us.html">About</a></li>
          <li><a href="c.php">Contact</a></li>
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
      
      <div id="comments">
        
        <h2>Reserve your Order</h2>
        <fieldset >
        <form action="main_menu.php" method="get" >
          <div class="one_third first" id="n1">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required >
          </div>
          <!--
          <div class="one_third">
            <label for="email">EMail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
           -->
          <div class="one_third">
            <label for="number">Your Number <span>*</span></label>
            <input type="text" name="num" id="number" value="" size="22" required >
          </div>

         <div class="one_third">
            <label for="location">Location</label>
            <select id="location" required style="border-color: red" hover="red"> <option> - select -</option><option>piazza del campo</option> <option>via fiorentina</option> <option>san maniato</option> <option>via pandini</option> </select>
          </div>
          <div class="block clear" >
            <label for="comment">Your Comments</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <a href="sub_menu.php"><input type="submit" name="submit" value="Submit" style="
            background-color: #000000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
             cursor: pointer;
            margin-top: 40px;
            margin-bottom: 40px;
            margin-left: 18px; "></a>
            &nbsp;
            <input type="reset" name="reset" value="Reset" style=" background-color: #000000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
             cursor: pointer;
            margin-top: 40px;
            margin-bottom: 40px;
            margin-left: 18px; ">
          </div>
        </form>
      </fieldset>
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
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="heading">Posuere lectus enim quis leo</h6>
      <p class="btmspace-30">Suspendisse potenti ut tempus consequat accumsan donec.</p>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Id interdum nisl in</h6>
      <ul class="nospace linklist">
        <li><a href="#">Fermentum massa eget</a></li>
        <li><a href="#">Ipsum ut euismod arcu</a></li>
        <li><a href="#">In volutpat mattis nam</a></li>
        <li><a href="#">Diam leo placerat</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">At nulla ultrices</h6>
      <ul class="nospace linklist">
        <li><a href="#">Id diam in ultrices</a></li>
        <li><a href="#">Molestie neque nulla</a></li>
        <li><a href="#">Massa molestie efficitur</a></li>
        <li><a href="#">Eu tristique magna</a></li>
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