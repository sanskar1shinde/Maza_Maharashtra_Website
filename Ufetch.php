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
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="tanmay";
$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 $Username = $_POST['username'];
  $query = "SELECT * FROM ubooking WHERE username='$Username'";
  $result = mysqli_query($conn,$query);

  
 /* if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $_SESSION['data'] = $data;
}
   else {
       
   }*/

?>


<h3>Details of ALL User</h3><br><br>
          <table border="5" cellspacing="0">
          <tr>
              <td> Username </td>
              <td> Course </td>
              <td> Country </td>
             
              <td> Payment </td>
               <td> University </td>
          
          </tr>
          <?php 
              while($row=mysqli_fetch_assoc($result))
              {
                  $ID = $row['hname'];
                  $Course = $row['rtype'];
                  $Country = $row['cin'];
                  $University = $row['usname'];
                  $Payment = $row['cout'];

              ?>
              <tr>
              <td><?php echo $ID ?></td>
              <td><?php echo $Course ?></td>
              <td><?php echo $Country ?></td>
              <td><?php echo $Payment ?></td>
              <td><?php echo" <!DOCTYPE html>
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
         <form name='myform' method='post' action='alast.php' class='aform'>
         <font size='4' color='black'><input type='radio' name='hname' value='$ID'> ".$ID." </input>
                <br>
               <font size='4' color='black'><input type='radio' name='Decide' value='Update'> Update </input>
               <br>
                 <input type='radio' name='Decide' value='Delete'> Delete</font>
                  <br>
    
                  <button type='submit' id='Submit' name='submit'>Submit</button>
          </form>
      </body>   
</html>" ?></td> 
              </tr>        
              <?php 
          } 
     
          ?>                                                                    
  </table>


            </div>
 <?php

// start session_start

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
  
  
  // query the database for the user's details
  $sql = "SELECT * FROM reg WHERE username='$Username'";
  $result = mysqli_query($conn, $sql);
  
  // check if the user exists in the database
  if (mysqli_num_rows($result) > 0) {
     
     // do something here after the user has successfully logged in
  } else {
    echo "Invalid username or password.";
  }

   if ($result->num_rows > 0) {
    $data1 = array();
    while($row = $result->fetch_assoc()) {
        $data1[] = $row;
    }
    $_SESSION['data'] = $data1;

   
}
   else {
       echo" Invalid";
   }
  // close the database connection
  mysqli_close($conn);
  
?>

</div>

</body>
</html>