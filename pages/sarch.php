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

 $stmt= $con->prepare("select * from order1 where  name like '".$x."%' ");

   //$stmt->execute(array($_GET['s']));
    $stmt->execute();

    

echo "<table border='1'>";
echo "<caption ><h1> Menu Table </h1> </caption>";
echo "<tr>";
echo "<th>Order_id</th>";
echo "<th>Name</th>";
echo "<th>Phone number</th>";
echo "<th>location</th>";
echo "<th>Comment</th>";
//echo "<th>".count($row=$stmt->fetch(PDO::FETCH_ASSOC))."</th>";
echo "</tr>";


   while( $row=$stmt->fetch(PDO::FETCH_ASSOC) )
{
   echo"<tr>";
   echo "<td>".$row['oredr_id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['number']."</td>"."<td>".$row['location']."</td>"."<td>".$row['comment']."</td>";
   
   echo"</tr>";

 }

 echo"</table>";

}




?>
