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
           
            $Decide= $_POST['Decide'];
            $hname= $_POST['hname'];

            // Connect to the database and retrieve the relevant data
             $conn = mysqli_connect("localhost", "root", "", "tanmay");
            $query = "SELECT username FROM ubooking WHERE username='$form_value'";

            $result = mysqli_query($conn, $query);

             // Fetch the data from the database
            $row = mysqli_fetch_assoc($result);
            @$db_value = $row['username'];

           
            if($Decide=='Delete'){
                $sql = "DELETE from ubooking where hname='$hname' and username='$form_value'";
           
                if (mysqli_query($conn, $sql)) 
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
        <a href='index.html'><h2>DONE</h2>
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
        <a href='index.html'><h2>Failde</h2>
    </div>
</body>
</html>
                    ";
                }                

                $query = "SELECT * FROM hotels WHERE hname='$hname'";

                $result = mysqli_query($conn, $query);
    
                 // Fetch the data from the database
                $row = mysqli_fetch_assoc($result);
                @$room_val = $row['rooms'];             
                
                $sql1="UPDATE hotels set rooms=$room_val+1 where hname='$hname'";
                $resul2 = mysqli_query($conn, $sql1);
            }
            else if($Decide== "Update"){

                echo"<!DOCTYPE html>
                <html
                <head>
                  <title>User Login </title>
                
                  <link rel='stylesheet' href='https://unpkg.com/swiper@7/swiper-bundle.min.css' />
                
                  <!-- font awesome cdn link  -->
                  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
                
                  <!-- custom css file link  -->
                  <link rel='stylesheet' href='css/style.css'>
                
                </head>
                     <body>
                         <form name='myform' method='post' action='hupdate.php' class='aform'>
                         <font size='4' color='white'><input type='radio' name='hname' value='$hname' required> ".$hname." </input>
                                <br>
                               <font size='4' color='white'><input type='radio' name='rmtype' value='single' required> Single </input>
                               <br>
                                 <input type='radio' name='rmtype' value='double' required> Double</font>
                                  <br><br>
                                  &#8226; Check In <br>
                                <input type='date' name='cin' required></input>
                                <br>
                                  <button type='submit' id='Submit' name='submit'>Submit</button>
                          </form>
                      </body>   
                </html>
                ";
            }
            // Compare the values and take appropriate action
            // if ($form_value === $db_value)
            // {
               
            //     // Prepar  SQL statement to update the field
                
            // }
            // else 
            // {
            //         echo"<h3>Incorrect</h3>";
            // }
            // Close the database connection
            mysqli_close($conn);
        }
}  
?>


            </div>
</div>

</body>
</html>