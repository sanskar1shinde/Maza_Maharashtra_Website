
<!--For Dudecting hotels-->
<?php
session_start();

if(isset($_SESSION["data"]))
{
  foreach($_SESSION["data"] as $row)
  {
        
    $form_value= $row["username"];
    
  } 

    $host = "localhost";
  $user = "root";
  $password = "";
  $database = "tanmay";
  $conn = mysqli_connect($host, $user, $password, $database);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$query = "update ubooking set status='PAYED' where username='$form_value'";
$retVal = mysqli_query($conn,$query);


if($retVal==true)
{
echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='css/style.css'/>
        <link rel='stylesheet' href='https://unpkg.com/swiper@7/swiper-bundle.min.css' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' />
        <title>Maharashtra</title>
    </head>
<body>
    <div class='come'>
        <a href='index.html'><h2>BOOKING SUCCESSFUL</h2>
    </div>
</body>
</html>

";
}
else{
    echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
	echo " Error Desc. : " . mysqli_error($conn)."<br/>";
}

mysqli_close($conn);
session_abort();
}
?>



<!--For Dudecting hotels-->
<?php
session_start();

if(isset($_SESSION["data"]))
{
  foreach($_SESSION["data"] as $row)
  {
        
    $form_value= $row["username"];
    
  } 

    $host = "localhost";
  $user = "root";
  $password = "";
  $database = "tanmay";
  $conn = mysqli_connect($host, $user, $password, $database);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$query = "update payment set status='PAYED' where username='$form_value'";
$retVal = mysqli_query($conn,$query);


if($retVal==true)
{
echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='css/style.css'/>
        <link rel='stylesheet' href='https://unpkg.com/swiper@7/swiper-bundle.min.css' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' />
        <title>Maharashtra</title>
    </head>
<body>
    <div class='come'>
        <a href='index.html'><h2>Payment Done</h2>
    </div>
</body>
</html>

";
}
else{
    echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
	echo " Error Desc. : " . mysqli_error($conn)."<br/>";
}

mysqli_close($conn);
session_abort();
}
?>