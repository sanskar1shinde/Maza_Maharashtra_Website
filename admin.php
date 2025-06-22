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




<?php

// start session_start

session_start();
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
  @$Username = $_POST['userid'];
  @$Password = $_POST['password'];
  
  // query the database for the user's details
  $sql = "SELECT * FROM admin WHERE userid='$Username' AND password='$Password'";
  
  $result = mysqli_query($conn, $sql);
  
  // check if the user exists in the database
  if (mysqli_num_rows($result) > 0) {
     
     // do something here after the user has successfully logged in
  } else {
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
            <a href='admin.html'><h2>Invalid </h2>
        </div>
    </body>
    </html>
    "; 
  }

   if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $_SESSION['data'] = $data;
}
   else {
    echo"
    
       "; 
   }
  // close the database connection
  mysqli_close($conn);
?>








<div class="rightbox">            
    <div id="rightbox_in_mid1-animate_animated-animate__fadeIn"
        style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;">
        <div class="rbinside_mid">
            <div class="databox"><h1>Your Bookings</h1>   
                   
<?php 

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="tanmay";
$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  $query = "select * from reg";
  $result = mysqli_query($conn,$query);

?>



<h3>Details of ALL User</h3><br><br>
          <table border="5" cellspacing="0">
          <tr>
              <td> Username </td>
              <td> Password </td>
              
          
          </tr>
          <?php 
              while($row=mysqli_fetch_assoc($result))
              {
                  $ID = $row['username'];
                  $Password = $row['password'];
              

              ?>
              <tr>
              <td><?php echo $ID ?></td>
              <td><?php echo $Password ?></td>
              </tr>        
              <?php 
          } 
     
          ?>                                                                    
  </table>


  <form name="myform" method="post" class="aform" action="Ufetch.php">
              <h1>User id</h1>
              <input type="text" name="username" id="Username" placeholder="Enter user Id" required>
      <a href="admin.html">
          <button type="button" name="" value="Back">Back</button>
      </a>
              <button type="submit" name="submit" value="See Details">Submit</button>
          </form>
  
            </div>
        </div>                        
    </div>

</div>

</body>
</html>