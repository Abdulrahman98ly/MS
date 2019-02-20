<?php

$dsn='mysql:host=localhost;dbname=itemsdb';
$user='root';
$pass='';

try{

$con = new PDO($dsn,$user,$pass);

$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "<h1>Connected Al hamed lil Alah</h1>";
}

catch(PDOExeption $e)
{
	echo "faild".$e->getmessage();
}


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
$stmt= $con->prepare("insert into items  (itemno,itemname,itemprice) values (?,?,?) ");



if( $stmt->execute(array($_POST['number'],$_POST['name'],$_POST['price'])) === true )
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
<head>
<title>Bronea</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>

<form class="modal-content animate"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    

    <div class="container">
      <label for="uname"><b>item number</b></label>
      <input type="text" placeholder="Enter item number" name="number" required>

      <label for="psw"><b>item name</b></label>
      <input type="text" placeholder="Enter item name" name="name" required>

       <label for="psw"><b>item price</b></label>
      <input type="text" placeholder="Enter item price" name="price" required>
        
      <button type="submit">Save</button>
     
    </div>

  </form>
</body>
</html>