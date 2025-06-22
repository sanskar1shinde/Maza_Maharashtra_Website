
<!--For inserting into booking table-->
<?php
   //Retiver username
   
session_start();
if(isset($_SESSION["data"]))
{
  foreach($_SESSION["data"] as $row)
  {
        
    $form_value= $row["username"];
    
  }    
          
    $hname=$_POST['mumbai'];
    $rtype=$_POST['type'];
    $usname=$_POST['name'];
    $email=$_POST['email'];
    $cin=$_POST['checkin'];
    $cout=$_POST['checkout'];
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tanmay";
    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $find = "SELECT hname FROM ubooking WHERE username='$form_value' and hname='$hname'";
    $find1 = "SELECT rtype FROM ubooking WHERE username='$form_value'";

    

    $result = mysqli_query($conn, $find);
    $result1 = mysqli_query($conn, $find1);

    
    // Fetch the data from the database
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result1);
    @$db_value = $row['hname'];
    @$db_type = $row2['rtype'];
    

    
    if($db_value == $hname && $db_type == $rtype)
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
              <a href='admin.html'><h2>REPEATED SELECTION</h2>
          </div>
      </body>
      </html>
      ";
    }
    else
    {
      
      $query = "insert into ubooking values('$form_value','$hname','$rtype','$usname','$email','$cin', $cout , '')";
        
      $retVal = mysqli_query($conn,$query);

      if($retVal==true)
      {
        echo "
      
      ";
      }
      else{
          echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
        echo " Error Desc. : " . mysqli_error($conn)."<br/>";
      }

      //For Dudecting hotels
      $query = "select hname from hotels";
      $retVal = mysqli_query($conn,$query);
      
      
      if($retVal==true)
      {
      echo "";
      }
      else{
          echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
        echo " Error Desc. : " . mysqli_error($conn)."<br/>";
      }
      
      while( $row = mysqli_fetch_assoc($retVal))
      {
        
        $a= $row["hname"];
        if($a == $hname)
        {
          $sql = "update hotels set rooms= rooms-1 where hname='$hname'";
          $result = mysqli_query($conn,$sql);
      
          if($result==true)
          {

          }
          else{
              echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
            echo " Error Desc. : " . mysqli_error($conn)."<br/>";
          }    
        }
        else{
        }
      }
      //For Dudecting hotels

      //For Payment table
      $rtype=$_POST['type'];
      $cout=$_POST['checkout'];
      $smt=1000;
      $dmt=2000;
      $status= '';

      if($rtype == 'single')
      {
        $amt= 1000 * $cout;
        
        $query="insert into payment values('$form_value','$hname',$amt,'$status')";
        $result = mysqli_query($conn,$query);
        
        if($result==true)
        {
        
        }
        else{
            echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
          echo " Error Desc. : " . mysqli_error($conn)."<br/>";
        }
      }
      else if($rtype == "double")
      {
        $amt= 2000 * $cout;
        echo'Amount<br>'. $amt .'<br>';
        $query="insert into payment values('$form_value','$hname',$amt,'$status')";
        $result = mysqli_query($conn,$query);
        
        if($result==true)
        {
        echo "Double Inserted";
        }
        else{
            echo " Error Status Code : " . mysqli_errno($conn) ."<br/>";
          echo " Error Desc. : " . mysqli_error($conn)."<br/>";
        }          
      }
      //For Payment table

      //Display page
      echo '<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>REGISTRATION </title>
      
          <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      
          <!-- font awesome cdn link  -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      
          <!-- custom css file link  -->
          <link rel="stylesheet" href="css/style.css">
      
      </head>
             <body>
      
             <div class="pay">
                  <h2> Payment</h2>
                  <form name="myform" action="bdone.php" method="post">  
       
                  <h3>AMount</h3>
                  <h3>';
                  
                          $query = "select amount from payment where username='$form_value' and hname='$hname'";
                          $retVal = mysqli_query($conn,$query);
                          if($row =mysqli_fetch_assoc($retVal)){
                              echo $row['amount'];
                            
                          }   
      
                  echo '</h3>
                                     
                     <h3>Card Number</P><input type="text" name="CardNumber" placeholder="Enter Card Number" minlength="16" maxlength="16" pattern="[0-9]*" title="Enter Number">
                      
      
                     <h3>Exp Month</h3><input type="text" name="ExpMonth" placeholder="Enter Expiry Month" minlength="1" maxlength="2" pattern="[0-9]*" required title="Enter Number">
                     <h3>Exp Year</h3><input type="text" name="ExpYear" placeholder="Enter Expiry Year" minlength="4" maxlength="4" pattern="[0-9]*" required title="Enter Number"> 
                      <h3>CVV</P><input type="password" name="CVV" placeholder="Enter CVV Number" minlength="3" maxlength="3" pattern="[0-9]*" required title="Enter Number">  
                         
                     <label> <h2><input type="checkbox" name="" required> I agree all details are true to my knowledge!</h2></label>
                     
                      <button type="submit" id="Submit" name="submit">Submit</button>
                      <button type="reset" id="Reset" name="reset">Reset</button>
                         
                      </form>
        
          </div>
      
      
                  
              </body>   
       </html>';
      //Display page
    }
    
    mysqli_close($conn);
}
session_abort();
?>




<!--
session_start();

$hname=$_POST['mumbai'];
$host = "localhost";
  $user = "root";
  $password = "";
  $database = "tanmay";
  $conn = mysqli_connect($host, $user, $password, $database);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
mysqli_close($conn);
session_abort();
?>For Payment table



session_start();

if(isset($_SESSION["data"]))
{
  foreach($_SESSION["data"] as $row)
  {
        
    $form_value= $row["username"];
    
  } 


 $user = "root";
    $password = "";
    $database = "tanmay";
    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
       //Retiver username
       
        
}
session_abort();-->





