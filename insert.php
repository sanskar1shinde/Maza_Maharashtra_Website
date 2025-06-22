<?php


$host = "localhost";
$user = "root";
$password = "";
$database = "tanmay";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['cname'])  ) {
    // Access the form data
    $cname = $_POST['cname'];


    // Handle the data as needed
}


if (isset($_POST['username'])  ) {
    // Access the form data
    $uname = $_POST['username'];

    
    // Handle the data as needed
}

if (isset($_POST['password'])  ) {
    // Access the form data
    $pass = $_POST['password'];

    
    // Handle the data as needed
}


if (isset($_POST['phone'])  ) {
    // Access the form data
    $phno = $_POST['phone'];

  
    // Handle the data as needed
}


if (isset($_POST['mail'])  ) {
    // Access the form data
    $email = $_POST['mail'];

   
    // Handle the data as needed
}

$query = "insert into reg values('$cname','$uname','$pass',$phno,'$email')";

$retVal = mysqli_query($conn,$query);

if($retVal==true)
{
echo"
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
        <a href='index.html'><h2>REGISTERED </h2>
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

?>