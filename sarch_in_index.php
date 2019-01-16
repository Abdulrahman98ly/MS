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

// Sarch operation begin ...



$x=$_GET['s'];


if($x != "")
{
//	$len=strlen($x);

 $stmt= $con->prepare("select name,price,size from menue where  name like '".$x."%' ");

   //$stmt->execute(array($_GET['s']));
    $stmt->execute();

    

echo "<table border='1'>";
echo "<caption ><h1> Menue Table </h1> </caption>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Price</th>";
echo "<th>Size</th>";
echo "<th>Location In Menue</th>";
;
//echo "<th>".count($row=$stmt->fetch(PDO::FETCH_ASSOC))."</th>";
echo "</tr>";


   while( $row=$stmt->fetch(PDO::FETCH_ASSOC) )
{
   echo"<tr>";
   echo "<td>".$row['name']."</td>"."<td>".$row['price']."</td>"."<td>".$row['size']."</td>";
   echo"<td><a href='#idi' >Order it</a>";
   echo"</tr>";

 }

 echo"</table>";

}




?>
