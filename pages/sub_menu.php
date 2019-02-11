 <!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>MIGLIOR SAPORE</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
  
  <div class="bgded overlay" style="background-image:url('../s1.jpg');"> 

<?php
include"../header.html";
?>

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 

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


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<!-- <div class="bgded overlay" style="background-image:url('menuimg/coveri.jpg');"> -->
  <!-- ################################################################################################ -->
  
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="height: 1900px;">
  
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
          echo"<a href='paymentt.html'><button class='btnADD'> ". "Order" ."</button></a>";
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
          echo"<a href='paymentt.html'><button class='btnADD'> ". "Order" ."</button></a>";
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
          echo"<a href='paymentt.html'><button class='btnADD'> ". "Order" ."</button></a>";
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
          echo"<a href='paymentt.html'><button class='btnADD'> ". "Order" ."</button></a>";
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
          echo"<a href='paymentt.html'><button class='btnADD'> ". "Order" ."</button></a>";
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
          echo"<a href='paymentt.html'><button class='btnADD'> ". "Order" ."</button></a>";
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