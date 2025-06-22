<?php


@session_start();
// connect to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "tanmay";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$user=$_POST['username'];
$pass=$_POST['password'];

$sql="UPDATE reg set password='$pass' where username='$user'";
$result=mysqli_query($conn,$sql);

if($result==true){
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
        <a href='admin.html'><h2>UPDATED</h2>
    </div>
</body>
</html>
    
    
    ";
}
else{
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
        <a href='admin.html'><h2>NOT UPDATED</h2>
    </div>
</body>
</html>
    
    
    ";
}
?>