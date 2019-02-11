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

// editig deleting adding ------------------------------------

$c=count($_POST)-1;



//Delete
if($c == 1)
{
   
$stmt= $con->prepare("Delete from menue where id=? ");


if( $stmt->execute(array($_POST['id'])) === true )
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

//ADD
 else if($c == 4)
{

   $stmt= $con->prepare("insert into menue (name,price,size,cat) values (?,?,?,?)");


if(  $stmt->execute(array($_POST['name'],$_POST['price'],$_POST['size'],$_POST['pt'])) === true )
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

//Edit
else if($c == 5)
{

   $stmt= $con->prepare("update menue set name=?, price=?, size=? ,cat=? where id=?  ");


if(  $stmt->execute(array($_POST['name'],$_POST['price'],$_POST['size'],$_POST['pt'],$_POST['id'])) === true )
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
<title>Bronea | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/menu4.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="../index.html">Log out</a></li>
         
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
        <h1>Menu Editing</h1>
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
      
      
      <!-- ################################################################################################ -->
      <h6 class="heading"><br><br><br>Welcome ...</h6>
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
<!--                                      menue  table                   -->

<?php


 $stmt= $con->prepare("select * from menue ");

   $stmt->execute();

echo "<table border='1'>";
echo "<caption ><h1> Menue Table </h1> </caption>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>price</th>";
echo "<th>size</th>";
echo "<th>product type</th>";
echo "<th>Action</th>";
echo "</tr>";

   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
   echo"<tr>";
   echo "<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['price']."</td>"."<td>".$row['size']."</td>"."<td>".$row['cat']."</td>";
   echo"<td><a href='#idi' >Edit</a> | <a href='#id'>Delete</a></td>";
   echo"</tr>";
 }

 echo"</table>";

?>

<br>
<br>
<br>



    <div class="content"> 
      <!-- ################################################################################################ -->
     
     
      <div id="comments">
        
        
        <h2>Add in menue</h2>
          <fieldset style="position: relative">
              <legend>Add in menue table</legend>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="position: relative; left: 8%;">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required style="border-color: red">
          </div>
          <div class="one_third">
            <label for="price">Price <span>*</span></label>
            <input type="text" name="price" id="price" value="" size="22" required style="border-color: red">
          </div>
           <div class="one_third">
            <label for="size">Size <span>*</span></label>
            <input type="text" name="size" id="size" value="" size="22" required style="border-color: red">
          </div>

           <div class="one_third" style="position:absolute; left:-30px; top:70px">
            <label for="pt">product type <span>*</span></label>
            <input type="text" name="pt" id="pt" value="" size="22" required style="border-color: red">
          </div>


            
          <!--<div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>-->
          <!--<div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>-->
          <div style="position: absolute; left:-1px; top:181px;">
             
              
            <input type="submit" name="submit" value="Add" style="border-color: red">
            <input type="reset" name="reset" value="Reset" style="border-color: red">
          </div>
        </form>
          </fieldset>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
<!--                          delete form                   -->
   <h2>Delete from the menue</h2>
          <fieldset style="position: relative">
              <legend>delete from menue table</legend>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="position: relative; left: 8%;">
          <div class="one_third first">
            <label for="id">Id <span>*</span></label>
            <input type="text" name="id" id="id" value="" size="22" required style="border-color: red">
          </div>
         
            
          <!--<div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>-->
          <!--<div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>-->
          <div style="position: absolute; left:-1px; top:107px;">
             
              
            <input type="submit" name="submit" value="Delete" style="border-color: red">
            <input type="reset" name="reset" value="Reset" style="border-color: red">
          </div>
        </form>
          </fieldset>


<!--                          delete form                    -->

          <br>
          <br>
          <br>
          <br>
<!--                       Update the table-->
 <h2>Edite The Menue</h2>
          <fieldset style="position: relative">
              <legend>update the menue table</legend>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="position: relative; left: 8%;">


          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required style="border-color: red">
          </div>

          
          <div class="one_third">
            <label for="idi">Id <span>*</span></label>
            <input type="text" name="id" id="idi" value="" size="22" required style="border-color: red">
          </div>

          <div class="one_third">
            <label for="price">Price <span>*</span></label>
            <input type="text" name="price" id="price" value="" size="22" required style="border-color: red">
          </div>
           <div class="one_third" style="position:absolute; left:-30px; top:70px">
            <label for="size">Size <span>*</span></label>
            <input type="text" name="size" id="size" value="" size="22" required style="border-color: red">
          </div>

           <div class="one_third" style="position:absolute; left:305px; top:70px">
            <label for="pt">product type <span>*</span></label>
            <input type="text" name="pt" id="pt" value="" size="22" required style="border-color: red">
          </div>
            
          <!--<div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>-->
          <!--<div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>-->
          <div style="position: absolute; left:-1px; top:181px;">
             
              
            <input type="submit" name="submit" value="Update" style="border-color: red">
            <input type="reset" name="reset" value="clear" style="border-color: red">
          </div>
        </form>
          </fieldset>
          <br>
          <br>
          <br>
          <br>
<!--                       Updatae the table-->
      </div>
      <!-- ################################################################################################ -->
    </div>
      
      <br>
      <!-- data grid view -->
      
      




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