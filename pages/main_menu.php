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

// inerting into table order in database

$c=count($_GET);



if($c == 5)
{
   $stmt=$con->prepare("insert into order1 (name,number,location,comment) values (?,?,?,?)");



if(  $stmt->execute(array($_GET['name'],$_GET['num'],$_GET['loc'],$_GET['comment'])) === true )
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

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>MIGLIOR SAPORE</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body id="top">

    <div class="bgded overlay" style="background-image:url('../menu_m1.jpg');"> 

<?php
include"../header.html";
?>
 </div>
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="padding: 0px;">
  
    <!-- main body -->
    <!-- ################################################################################################ -->
  
      <!-- ################################################################################################ -->
      <br><br><br>
        <figure>
          <h1 class="heading" style="position: relative; left:502px; ">Let us offer you what you want</h1><br><br><br>
        </figure><br><br>

<div id="good" style="position: relative; left: 290px">
  <div class="slide_m" style="position: relative;">

<div class="fade_m">
  <img src="../images/demo/backgrounds/menu_m5.jpg" style="width:45% ; height: 350px; position: absolute; left:100px; top: -80px">
  <a href="sub_menu.php#meals"><button class="btn" style="vertical-align:middle; position: absolute; left: 305px; top: 99px;width: 179px; height: 59px;border-color: white; color: white;">Meals  &Rang; </button></a>
</div>

 </div>

 <div class="slide_m" style="position: relative;">

<div class="fade_m"  > 
  <img src="../images/demo/backgrounds/menu_m6.jpg" style="width:45% ; height: 350px; position: absolute; left:100px; top: 300px">
  <a href="sub_menu.php#desearts"><button class="btn" style="vertical-align:middle ;position: absolute; left: 320px; top: 475px ;width: 179px; height: 59px;border-color: white; color: white;">Dessert  &Rang;</button></a>
</div>
 </div>


<div class="slide_m" style="position: relative;">

<div class="fade_m"  > 
  <img src="../images/demo/backgrounds/menu_m8.jpg" style="width:45% ; height: 350px; position: absolute; left:100px;top: 694px">
  <a href="sub_menu.php#drinks"><button class="btn" style="vertical-align:middle ;position: absolute; left: 320px; top:870px ;width: 179px; height: 59px;border-color: white; color: white;">Drinks  &Rang;</button></a>
  <br>
  <br>
  <br>

</div>


 </div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

 <?php
 include"../footer.html";
 ?>
<!-- ################################################################################################ -->

</body>
</html>