<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400&family=Russo+One&display=swap" rel="stylesheet">
    <title>Maza Maharashtra</title>
</head>
<body>




<div class="rightbox">            
    <div id="rightbox_in_mid1-animate_animated-animate__fadeIn"
        style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;">
        <div class="rbinside_mid">
            <div class="databox"><h1>Your Bookings</h1>   
            <?php
  session_start();
  if (isset($_SESSION["data"]))
  {
    foreach ($_SESSION["data"] as $row)
    {
          // Retrieve the value from the HTML form
            $form_value = $row["username"];
            
            $cin= $_POST['cin'];
            
            $hname= $_POST['hname'];
            $type= $_POST['rmtype'];

            // Connect to the database and retrieve the relevant data
             $conn = mysqli_connect("localhost", "root", "", "tanmay");
            $query = "SELECT username FROM ubooking WHERE username='$form_value'";

            $result = mysqli_query($conn, $query);

             // Fetch the data from the database
            $row = mysqli_fetch_assoc($result);
            @$db_value = $row['username'];

            
           
            $sql="UPDATE ubooking set rtype='$type', cin='$cin' where username='$form_value' and hname='$hname'";
            
            $result1 = mysqli_query($conn, $sql);

            if($result1==true)
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
        <a href='index.html'><h2>UPDATED</h2>
    </div>
</body>
</html>
                
                ";
            }
            mysqli_close($conn);
    }
}
?>


            </div>
</div>

</body>
</html>