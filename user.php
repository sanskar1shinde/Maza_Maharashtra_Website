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

// retrieve the username and password from the form
$Username = $_POST['username'];
$Password = $_POST['password'];

// query the database for the user's details
$sql = "SELECT * FROM reg WHERE username='$Username' AND password='$Password'";
$result = mysqli_query($conn, $sql);

#echo"". $sql ."";
if ($result->num_rows > 0) {
$data = array();
while($row = $result->fetch_assoc()) {
$data[] = $row;
}
$_SESSION['data'] = $data;

#foreach($data as $row) {
#echo ''. $row['username'] .''. $row['password']. ''. $row['phone']  ;
#}
}
else {
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
        <a href='user.html'><h2>Invalid </h2>
    </div>
</body>
</html>
";
}
// close the database connection
mysqli_close($conn);

?>


<?php

if(isset($_SESSION["data"]))
{
  foreach($_SESSION["data"] as $row)
  {
        
    $form_value= $row["username"];
    
  
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "tanmay";
        $conn = mysqli_connect($host, $user, $password, $database);
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        // retrieve the username and password from the form
        $Username = $_POST['username'];
        $Password = $_POST['password'];

        // query the database for the user's details
        $sql = "SELECT * FROM reg WHERE username='$Username' AND password='$Password'";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0)
        {

            echo '<!DOCTYPE html>
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
                <div class="mainbox_mid">
                    <div class="leftbox_mid animate_animated-animate__fadeIn"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeIn;">
                        <div class="leftbox_in1 animate_animated-animate__fadeInLeft"
                        style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                            <button class="mid_b1">History</button>
                        </div>
                        <div class="leftbox_in2 animate_animated-animate__fadeInRight"
                        style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.2s; animation-name:fadeInRight;">
                            <button class="mid_b2">Booking</button>
                        </div>
                        
                        
                    </div>
            <!-- Dashboard rightside box-->
            
            <!-- MUMBAI SECTION STARTS-->
            
            <div class="rightbox">            
                <div id="rightbox_in_mid1-animate_animated-animate__fadeIn"
                    style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;">
                    <div class="rbinside_mid">
                        <div class="databox"><h1>Your Bookings</h1>';   
                       ?>         
                        <?php
                        @session_start();
                        if (isset($_SESSION["data"]))
                        {
                            foreach ($_SESSION["data"] as $row)
                            {
                                $form_value= $row["username"];
                                
                            }
                        
                        $host="localhost";
                        $dbUsername="root";
                        $dbPassword="";
                        $dbname="tanmay";
                        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
                        
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                        $query = "select * from ubooking where username='$form_value'";
                        $result = mysqli_query($conn,$query);
                        ?>
                        
    
    
                        
                        <h3>Details of ALL User</h3><br><br>
                                <table border='5' cellspacing='0'>
                                <tr>
                                    <td style='text-align:center;'> Hotel Name </td>
                                    <td style='text-align:center;''> Room Type </td>
                                    <td style='text-align:center;'> Check-In </td>
                                    <td style='text-align:center;'> Status </td>
                                    
                                
                                </tr>
                                
                                <?php 
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row["hname"];
                                        $Password = $row["rtype"];
                                        $Check = $row["cin"];
                                        $Pay = $row["status"];
                                    
    
                                    ?>
                                    <tr>
                                    <td><?php echo $ID ?></td>
                                    <td><?php echo $Password ?></td>
                                    <td><?php echo $Check ?></td>
                                    <td><?php echo $Pay ?></td>
                                    </tr>        
                                    <?php 
                                } 
                        }                                                                                
                        ?>             
                              </table>
                        </div>
                    </div>                        
                    </div>
                <!-- MUMBAI SECTION ENDS-->
            
                <!-- PUNE section starts-->
            
                <!--  hotelnear animate_animated-animate__fadeInLeft"
                                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft; -->  
            <?php
               echo' <div id="rightbox_in_mid2-animate_animated-animate__fadeIn"
                                style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;">
                    <div class="rbinside_mid">
                       
                        </div>
                        </div>
                        </div>
                            <div class="hotel_container">
                                <div class="product-box1 animate_animated animate__fadeIn"
                                style="visibility: visible; animation-duration: 2s; animation-name:fadeIn;
                                ">
                                    <img src="image/MH1.webp" alt="Product Image">
                                    <h2>HOTELS</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac varius lectus.</p>
                                    
                                    <button class="showFormButton"><a href="hotelpg.php">Explore</button></a><br>
                                    <a href="user.html"><i class="fa fa-long-arrow-left" style="font-size:24px"></i></a>
                                </div>
                            </div>    
                        </div>          
                    </div>
                        <!-- PUNE SECTION ENDS-->               
                                        
            
                                
                        
                </div>
            </div>    
                
                
            <!-- AURANGABAAD SECTION ENDS -->
            
                <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script><script  src="js/pkgs.js"></script>
                <script  src="js/booking.js"></script><script  src="js/app.js"></script>
                <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script><script  src="js/text.js"></script>
            </body>
            </html>';
                    
        }
        else{
            echo"INVALID";
        }
    }
}
?>
