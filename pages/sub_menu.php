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
?>

<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>MIGLIOR SAPORE</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/layout.css" rel="stylesheet" type="text/css" media="all">
<!--<link rel="stylesheet" type="text/css" href="../layout/framwork.css">-->
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('menuimg/coveri.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="../index.html">Home</a></li>
          <li><a href="mainu.html">Menu</a></li>
      <li><a href="order.html">Order Online</a></li>
          <li><a href="#">Our Location</a></li>
           <li><a href="#">Cart</a></li>
          <li><a href="../index.html#contacts">Contact</a></li>
            
         
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
        <li><a href="p-signin.html">login</a></li>
        <li><a href="#">About</a></li>
        
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
        <h1><a href="../index.html">Bronea</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
          <li class="active"><a class="drop" href="#">Pages</a>
            <ul>
              <li class="active"><a href="gallery.html">Gallery</a></li>
              <li><a href="full-width.html">Full Width</a></li>
              <li><a href="sidebar-left.html">Sidebar Left</a></li>
              <li><a href="sidebar-right.html">Sidebar Right</a></li>
              <li><a href="basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
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
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
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
      <!-- ################################################################################################ 
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li>
      </ul> -->
      <!-- ################################################################################################ -->
      <h6 class="h_menu">You are in the store now</h6>
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
  
    <!-- main body -->
   <br>
     
        


<!-- box1 -->


<div  class="box1">

    <h5 id="meals">Meals</h5>
      
      
       <!-- <div class="pic">
          <img src="menuimg/s_1.jpg" style="height: 90px;" align="Left" />
        </div>  
      -->
        <?php
       $stmt= $con->prepare("select * from menue ");

       $stmt->execute();
        $mc=0;
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {

        if($row['cat'] == "m")
        { 
          

          if($mc % 2.0 == 0.0)
       {
       echo"<div class='itemleft'>";
        echo"<div>";
        echo"<h6 align='top' class='sub'>".$row['name']."</h6>";
        echo"</div><br>";

       echo"<div>";
          echo "<p class='ing'>" .$row['size']. "</p>" ;
        echo"</div>";

       echo"<div>";
         echo" <p class='pric'>".$row['price']."</p>";
        echo"</div>";
        
       echo"<div>";
          echo"<button class='btnADD'> +". "add to cart" ."</button>";
       echo"</div>";

      echo"</div>";
    }
    else
    {
      echo"<div class='itemright'>";
        echo"<div>";
        echo"<h6 align='top' class='sub'>".$row['name']."</h6>";
        echo"</div><br>";

       echo"<div>";
          echo "<p class='ing'>" .$row['size']. "</p>" ;
        echo"</div>";

       echo"<div>";
         echo" <p class='pric'>".$row['price']."</p>";
        echo"</div>";
        
       echo"<div>";
          echo"<button class='btnADD'> +". "add to cart" ."</button>";
       echo"</div>";

      echo"</div>";
    }
         $mc++;

         }

        
       
    }
    ?>
    <br>
    <br>
    <br>
  </div>

   
   <!--box 2-->
   
<div  class="box2">

    <h5 id="desearts">Desearts</h5>
      
      
       <!-- <div class="pic">
          <img src="menuimg/s_1.jpg" style="height: 90px;" align="Left" />
        </div>  
      -->
        <?php
       $stmt= $con->prepare("select * from menue ");

       $stmt->execute();
        $ec=0;
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {

    
        if($row['cat'] == "e")
        {
          
          if($ec % 2.0 == 0.0)
       {
       echo"<div class='itemleft'>";
        echo"<div>";
        echo"<h6 align='top' class='sub'>".$row['name']."</h6>";
        echo"</div><br>";

       echo"<div>";
          echo "<p class='ing'>" .$row['size']. "</p>" ;
        echo"</div>";

       echo"<div>";
         echo" <p class='pric'>".$row['price']."</p>";
        echo"</div>";
        
       echo"<div>";
          echo"<button class='btnADD'> +". "add to cart" ."</button>";
       echo"</div>";

      echo"</div>";
    }
    else
    {
      echo"<div class='itemright'>";
        echo"<div>";
        echo"<h6 align='top' class='sub'>".$row['name']."</h6>";
        echo"</div><br>";

       echo"<div>";
          echo "<p class='ing'>" .$row['size']. "</p>" ;
        echo"</div>";

       echo"<div>";
         echo" <p class='pric'>".$row['price']."</p>";
        echo"</div>";
        
       echo"<div>";
          echo"<button class='btnADD'> +". "add to cart" ."</button>";
       echo"</div>";

      echo"</div>";
    }
         $ec++;}
       
       
    }
    ?>
     <br>
    <br>
    <br>
  </div>

  <!--box 3-->

<div  class="box3">

    <h5 id="drinks">Drinks</h5>
      
      
       <!-- <div class="pic">
          <img src="menuimg/s_1.jpg" style="height: 90px;" align="Left" />
        </div>  
      -->
        <?php
       $stmt= $con->prepare("select * from menue ");

       $stmt->execute();
        $dc=0;
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {

       if($row['cat'] == "d")
        { 
          
          if($dc % 2.0 == 0.0)
       {
       echo"<div class='itemleft'>";
        echo"<div>";
        echo"<h6 align='top' class='sub'>".$row['name']."</h6>";
        echo"</div><br>";

       echo"<div>";
          echo "<p class='ing'>" .$row['size']. "</p>" ;
        echo"</div>";

       echo"<div>";
         echo" <p class='pric'>".$row['price']."</p>";
        echo"</div>";
        
       echo"<div>";
          echo"<button class='btnADD'> +". "add to cart" ."</button>";
       echo"</div>";

      echo"</div>";
    }
    else
    {
      echo"<div class='itemright'>";
        echo"<div>";
        echo"<h6 align='top' class='sub'>".$row['name']."</h6>";
        echo"</div><br>";

       echo"<div>";
          echo "<p class='ing'>" .$row['size']. "</p>" ;
        echo"</div>";

       echo"<div>";
         echo" <p class='pric'>".$row['price']."</p>";
        echo"</div>";
        
       echo"<div>";
          echo"<button class='btnADD'> +". "add to cart" ."</button>";
       echo"</div>";

      echo"</div>";
    }
        $dc++; 

        }

       
    }
    ?>
    <br>
    <br>
    <br>
  </div>

</div>

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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - </p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

</body>
</html>