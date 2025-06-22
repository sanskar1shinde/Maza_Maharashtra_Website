<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400&family=Russo+One&display=swap" rel="stylesheet">
    <title>Maza Maharashtra</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tanmay";
    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    ?>
    <div class="mainbox">
        <div class="leftbox animate_animated-animate__fadeInUpBig"
        style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUpBig;">
            <div class="leftbox_in1 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUpBig;">
                <button class="b1">MUMBAI</button>
            </div>
            <div class="leftbox_in2 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.2s; animation-name:fadeInUpBig;">
                <button class="b2">PUNE</button>
            </div>
            <div class="leftbox_in3 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.3s; animation-name:fadeInUpBig;">
                <button class="b3">NASHIK</button>
            </div>
            <div class="leftbox_in4 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.4s; animation-name:fadeInUpBig;">
                <button class="b4">NAGPUR</button>
            </div>
            <div class="leftbox_in5 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.5s; animation-name:fadeInUpBig;">
                <button class="b5">KOLHAPUR</button>
            </div>
            <div class="leftbox_in6 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.6s; animation-name:fadeInUpBig;">
                <button class="b6">SATARA</button>
            </div>
            <div class="leftbox_in7 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.7s; animation-name:fadeInUpBig;">
                <button class="b7">RATNAGIRI</button>
            </div>
            <div class="leftbox_in8 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.8s; animation-name:fadeInUpBig;">
                <button class="b8">AURANGABAAD</button>
            </div>
            <div class="leftbox_in9 animate_animated-animate__fadeInUpBig"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.9s; animation-name:fadeInUpBig;">
                <button class="b9">RAIGAD</button>
            </div>
            <div id="leftline">
                <div class="shadows"></div>
            </div>
           
        </div>
<!-- Dashboard rightside box-->

<!-- MUMBAI SECTION STARTS-->

<div class="rightbox">            
    <div id="rightbox_in1-animate_animated-animate__fadeIn"
        style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;">
        <div class="rbinside">

            <div class="hotelnear animate_animated-animate__fadeInLeft"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/upvanh1.webp" alt="">
                <div class="hotnm">
                    <h4>Hotel Shubham Lodging & Boarding</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Shubham_Lodging_Boarding'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>
               
            <div class="hotelnear animate_animated-animate__fadeInUp"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/upvanh2.webp" alt="">
                <div class="hotnm">
                    <h4>S.O.Y@Amrute Farms</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='S_O_Y_Amrute_Farms'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInRight"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/upvanh3.webp" alt="">
                <div class="hotnm">
                    <h4>Darsh Residency</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Darsh_Residency'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/viharh1.webp" alt="">
                <div class="hotnm">
                    <h4>Imperial Palace Resort</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Imperial_Palace_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>
               
            <div class="hotelnear animate_animated-animate__fadeInUp"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/viharh2.webp" alt="">
                <div class="hotnm">
                    <h4> Luxury villa 104</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Luxury_villa_104'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInRight"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/viharh3.webp" alt="">
                <div class="hotnm">
                    <h4>Twin bungalows</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Twin_bungalows'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/elephantah1.webp" alt="">
                <div class="hotnm">
                    <h4>The Park Hotels Navi Mumbai</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='The_Park_Hotels_Navi_Mumbai'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>
               
            <div class="hotelnear animate_animated-animate__fadeInUp"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/elephantah2.webp" alt="">
                <div class="hotnm">
                    <h4>Hotel Aishwarya Residency</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Aishwarya_Residency'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInRight"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/elephantah3.webp" alt="">
                <div class="hotnm">
                    <h4>Hotel Grande 51</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Grande_51'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="https://lh3.googleusercontent.com/p/AF1QipPPzie66eALOrxyfHlHiSWqY4QDGhANd9DjGVNt=w592-h404-n-k-rw-no-v1" alt="">
                <div class="hotnm">
                    <h4>Sangam Relax </h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Sangam_Relax'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>
               
            <div class="hotelnear animate_animated-animate__fadeInUp"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipM8zpIhsw_Dd--7SmxN9FRLZ27uaKzZ9NzlEuz6=w253-h168-k-no" alt="">
                <div class="hotnm">
                    <h4>Townhouse Residency</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Townhouse_Residency'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInRight"
            style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipO9K0tC90WbljQJyrTDr_Gvz-qFbysM2jll8pKK=w253-h138-k-no" alt="">
                <div class="hotnm">
                    <h4>Nakshatra Residency</h4>
                    <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Nakshatra_Residency'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                </div>
                <div class="reach">
                    <button class="showFormButton"><h4>BOOK</h4></button>
                </div>
            </div>

        </div>                        
    </div>
   
<!-- MUMBAI SECTION ENDS-->

<!-- PUNE section starts-->

<!--  hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft; -->  

    <div id="rightbox_in2-animate_animated-animate__fadeIn"
                    style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;">
        <div class="rbinside">

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/LH1.webp" alt="">
                    <div class="hotnm">
                        <h4>Meritas Crystal Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Meritas_Crystal_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/LH2.webp" alt="">
                    <div class="hotnm">
                        <h4>The Dukes Retreat</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='The_Dukes_Retreat'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/LH3.webp" alt="">
                    <div class="hotnm">
                        <h4>Aamby Valley City</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Aamby_Valley_City'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/pansheth3.webp" alt="">
                    <div class="hotnm">
                        <h4>Hotel Shivar</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Shivar'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/pansheth2.webp" alt="">
                    <div class="hotnm">
                        <h4> Hotel sahil</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_sahil'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/pansheth1.webp" alt="">
                    <div class="hotnm">
                        <h4>Abhiruchi Wellness Center and Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Abhiruchi_Wellness_Center_and_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/KH3.webp" alt="">
                    <div class="hotnm">
                        <h4>The Lagoona Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='The_Lagoona_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/KH2.webp" alt="">
                    <div class="hotnm">
                        <h4>Dukes Retreat Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Dukes_Retreat_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/KH1.webp" alt="">
                    <div class="hotnm">
                        <h4>Fariyas Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Fariyas_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipP4n_IBbEF_d9j3EApgZeLfpQLpVD7gIPt2M0yx=w408-h306-k-no" alt="">
                    <div class="hotnm">
                        <h4>Hotel Shivneri</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Shivneri'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipPfJtGt3T8q-Y_ZrSNsZLF1aM5JMwp5hIQMj6JO=w408-h472-k-no" alt="">
                    <div class="hotnm">
                        <h4>SPOT ON 67339</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='SPOT_ON_67339'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipNtgQl0GPjmGKSrpPoymCfAHrRmihG5bB5pGXtv=w408-h471-k-no" alt="">
                    <div class="hotnm">
                        <h4>Hotel Aashiyana </h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Aashiyana'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipNoGlJVYTDStzMdB3nhUqHEJYq9tgx0JRFG__Cf=w408-h306-k-no" alt="">
                    <div class="hotnm">
                        <h4>Aquarius Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Aquarius_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipPFykjzXxKjXKtxzv0menKdtYdgXh99flpEkdgS=w408-h306-k-no" alt="">
                    <div class="hotnm">
                        <h4>Teak Trail </h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Teak_Trail'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipOCZDjD6t3gEXe4FXz29g6dJw-Pq_ECXmOB1NL6=w408-h306-k-no" alt="">
                    <div class="hotnm">
                        <h4>Forest Park</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Forest_Park'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/446090378.jpg?k=459f09f0e97f88924f87ab1253729692ebbc644009fe439acaee2602e30cf879&o=&hp=1" alt="">
                    <div class="hotnm">
                        <h4>Astro Agro Farm </h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Astro_Agro_Farm'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipO9fKzpZBnzBF2PIJdw711KU4iQdvFttq1nuf_q=w408-h472-k-no" alt="">
                    <div class="hotnm">
                        <h4>Della Resorts</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Della_Resorts'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="https://lh5.googleusercontent.com/p/AF1QipPSdi0tOC6SkETb4ktlYJIcbH51jXfCTiuoHsnG=w408-h306-k-no" alt="">
                    <div class="hotnm">
                        <h4>Jijau niwas  </h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Jijau_niwas'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>

            <div class="hotelnear animate_animated-animate__fadeInLeft"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;">
                <img src="image/rainforest_bhima.webp" alt="">
                    <div class="hotnm">
                        <h4>Rain Forest Villa Bhimashankar and Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Rain_Forest_Villa_Bhimashankar_and_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
                </div>
       
            <div class="hotelnear animate_animated-animate__fadeInUp"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;">
                <img src="image/natraj_bhima.webp" alt="">
                    <div class="hotnm">
                        <h4>Natraj Holiday Resort</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Natraj_Holiday_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
            <div class="hotelnear animate_animated-animate__fadeInRight"
                style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;">
                <img src="image/nilam_bhima.webp" alt="">
                    <div class="hotnm">
                        <h4>Neelam Hills Resort - Bhimashankar</h4>
                        <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Neelam_Hills_Resort_Bhimashankar'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                    </div>
                    <div class="reach">
                        <button class="showFormButton-1"><h4>BOOK</h4></button>
                    </div>
            </div>
       
        </div>          
    </div>
<!-- PUNE SECTION ENDS-->              
                           
            <!-- NASHIK SECTION Starts -->              
           
            <div id="rightbox_in3-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/vaitarnah3.webp" alt="">
                        <div class="hotnm">
                            <h4>S K Farm</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='S_K_Farm'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-2"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/vaitarnah2.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Tulip & Restaurant</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Tulip_&_Restaurant'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-2"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/vaitarnah1.webp" alt="">
                        <div class="hotnm">
                            <h4>  Hotel Akshay Lodge</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Akshay_Lodge'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-2"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/IH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Manas Lifestyle Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Manas_Lifestyle_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-2"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/IH2.webp" alt="">
                        <div class="hotnm">
                            <h4>Rainforest Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Rainforest_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-2"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/IH1.webp" alt="">
                        <div class="hotnm">
                            <h4>The Grand Gardens Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='The_Grand_Gardens_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-2"><h4>BOOK</h4></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NASHIK SECTION Starts -->

            <!-- NAGPUR SECTION STARTS -->
            <div id="rightbox_in4-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/lonarh1.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Vikrant</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Vikrant'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-3"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/lonarh2.webp" alt="">
                        <div class="hotnm">
                            <h4>MTDC Resort Lonar</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='MTDC_Resort_Lonar'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-3"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/lonarh3.webp" alt="">
                        <div class="hotnm">
                            <h4>Forest Rest House Lonar</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Forest_Rest_House_Lonar'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-3"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/tadobah1.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Manmandir</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Manmandir'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-3"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/tadobah3.webp" alt="">
                        <div class="hotnm">
                            <h4>Tigers Heaven Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Tigers_Heaven_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-3"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/tadobah2.webp" alt="">
                        <div class="hotnm">
                            <h4>Jharna Resort,Tadoba</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Jharna_Resort_Tadoba'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-3"><h4>BOOK</h4></button>
                        </div>
                    </div>
                </div>  
            </div>
                <!-- NAGPUR SECTION ENDS -->

                <!-- KOLHAPUR SECTION STARTS -->


            <div id="rightbox_in5-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/rankalah1.webp" alt="">
                        <div class="hotnm">
                            <h4>Ambika Yatri Niwas</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Ambika_Yatri_Niwas'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-4"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/rankalah2.webp" alt="">
                        <div class="hotnm">
                            <h4> Lotus Yatri Niwas</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Lotus_Yatri_Niwas'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-4"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/rankalah3.webp" alt="">
                        <div class="hotnm">
                            <h4>Grey Stone - Lakefront Penthouse</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Grey_Stone_Lakefront_Penthouse'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-4"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/AH1.webp" alt="">
                        <div class="hotnm">
                            <h4>Green Valley Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Green_Valley_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-4"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/AH2.webp" alt="">
                        <div class="hotnm">
                            <h4>Dark Forest Retreat</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Dark_Forest_Retreat'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-4"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/AH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Whistling Woods Amboli</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Whistling_Woods_Amboli'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-4"><h4>BOOK</h4></button>
                        </div>
                    </div>
                </div>                  
            </div>
            <!-- KOLHAPUR SECTION ENDS -->

            <!-- SATARA SECTION STARTS -->

            <div id="rightbox_in6-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/MH1.webp" alt="">
                        <div class="hotnm">
                            <h4>Advait Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Advait_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/MH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Evershine Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Evershine_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/MH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Brightland Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Brightland_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/PH1.webp" alt="">
                        <div class="hotnm">
                            <h4>Bella Vista Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Bella_Vista_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/PH2.webp" alt="">
                        <div class="hotnm">
                            <h4>Ramsukh Resorts</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Ramsukh_Resorts'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/PH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Summer Plaza Retreat</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Summer_Plaza_Retreat'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>
                   
                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipMC0za8POHrWfezamGe95Hshc4ub1E6ysF9D4b9=w532-h440-k-no" alt="">
                        <div class="hotnm">
                            <h4>Vikrant hotel</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Vikrant_hotel'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="https://imgcld.yatra.com/ytimages/image/upload/t_hotel_yatra_details_desktop/v1438069010/Domestic%20Hotels/Hotels_Mahabaleshwar/Mother%20Farm%20House/Exterior_view_2.jpg" alt="">
                        <div class="hotnm">
                            <h4>Mother Farm</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Mother_Farm'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/MH1.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Omkar</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Omkar'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/kash1.webp" alt="">
                        <div class="hotnm">
                            <h4>Nature Plateau Paradise</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Nature_Plateau_Paradise'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/kash2.webp" alt="">
                        <div class="hotnm">
                            <h4>Heritagewadi</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Heritagewadi'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/kash3.webp" alt="">
                        <div class="hotnm">
                            <h4>Kaasai Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Kaasai_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/koynah1.webp" alt="">
                        <div class="hotnm">
                            <h4>Shivsagar Agro Tourism, Tapola</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Shivsagar_Agro_Tourism_Tapola'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/koynah2.webp" alt="">
                        <div class="hotnm">
                            <h4>Mangalya Cottages & Agro Tourism</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Mangalya_Cottages_Agro_Tourism'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/koynah3.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Shivneri Tapola</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Shivneri_Tapola'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipM4T2lGEcwjcO8PNoCj0RoEiqaZvpRJN3OTaEQN=w253-h189-k-no" alt="">
                        <div class="hotnm">
                            <h4>Hotel Happy Home</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Happy_Home'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipM3EAnCCm6sMjChM3JWOLVYSPTk3o6RErYbUqql=w253-h142-k-no" alt="">
                        <div class="hotnm">
                            <h4>Hotel Temple View</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Temple_View'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-5"><h4>BOOK</h4></button>
                        </div>
                </div>

                </div>
            </div>

            <!-- SATARA SECTION STARTS -->

            <!-- RATNAGIRI SECTION STARTS -->

            <div id="rightbox_in7-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPxHzvBYbKebM3TQvxcurx16O7l2u8MXKhCsAnh=w592-h404-n-k-rw-no-v1" alt="">
                        <div class="hotnm">
                            <h4>Jay Hotel</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Jay_Hotel'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipOKM5lni95BziZQKxCM30wn9LUdS-bcTpNbvFNp=w408-h306-k-no" alt="">
                        <div class="hotnm">
                            <h4>Hotel Raigad</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Raigad'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipPxjrY-1wLxPRs6NgSCtDDIuzEy_B0WFVIPEY6n=w533-h240-k-no" alt="">
                        <div class="hotnm">
                            <h4>Parvati Hotel</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Parvati_Hotel'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipN6rJQNtzOi1D6z1gvPEls6T4AVHQP-W5ktWAnc=w426-h240-k-no" alt="">
                        <div class="hotnm">
                            <h4>Acharekar's
                                <br> Home</h4>
                                <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Acharekar_Home'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipPX3k91-4_IvpL-d-ELXGafzqbqcL_AnKto5hA=w408-h306-k-no" alt="">
                        <div class="hotnm">
                            <h4>Serina House</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Serina_House'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipPRASDKlsV7_XSXeFjChdf3WsFkWc1smFFU4X6j=w408-h544-k-no" alt="">
                        <div class="hotnm">
                            <h4>Kulswamini<br> Home stay</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Kulswamini_Home_stay'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>
                   
                    <div class="hotelnear hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/ghotel1.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Shree Sagar
                            </h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Shree_Sagar'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/ghotel2.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel MADHUBAN</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_MADHUBAN'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipNdWA2qw2S1BweLrItHBTNUxJ_mssSbzAYGzXIo=w253-h337-k-no" alt="">
                        <div class="hotnm">
                            <h4>Hotel Landmark</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Landmark'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-6"><h4>BOOK</h4></button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RATNAGIRI SECTION ENDS -->


            <!-- AURANGABAAD SECTION STARTS -->

            <div id="rightbox_in8-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/aurangaH1.webp" alt="">
                        <div class="hotnm">
                            <h4>Click Hotel Aurangabad</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Click_Hotel_Aurangabad'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-7"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/aurangaH2.webp" alt="">
                        <div class="hotnm">
                            <h4>7 Apple Hotel - Aurangabad</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Apple_Hotel_Aurangabad'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-7"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/aurangaH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Hotel Yash Executive</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Hotel_Yash_Executive'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-7"><h4>BOOK</h4></button>
                        </div>
                    </div>
                   
                </div>
            </div>        
<!-- AURANGABAAD SECTION ENDS -->

<!-- RAIGAD SECTION STARTS -->
           
            <div id="rightbox_in9-animate_animated-animate__fadeIn"
            style="visibility: visible; animation-duration: 1s; animation-name:fadeIn;
            ">
                <div class="rbinside">
                    <div class="hotelnear animate_animated-animate__fadeInLeft"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInLeft;
                    ">
                        <img src="image/aurangaH1.webp" alt="">
                        <div class="hotnm">
                            <h4>Priyansh Home stay</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Priyansh_Home_stay'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-8"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInUp"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInUp;
                    ">
                        <img src="image/aurangaH2.webp" alt="">
                        <div class="hotnm">
                            <h4>Tranquil Beach Resort</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Tranquil_Beach_Resort'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-8"><h4>BOOK</h4></button>
                        </div>
                    </div>

                    <div class="hotelnear animate_animated-animate__fadeInRight"
                    style="visibility: visible; ;animation-duration: 1s; animation-delay: 0.1s; animation-name:fadeInRight;
                    ">
                        <img src="image/aurangaH3.webp" alt="">
                        <div class="hotnm">
                            <h4>Shanti Guest House</h4>
                            <h4>Rooms Avaliable- <?php
                    $query = "select rooms from hotels where hname='Shanti_Guest_House'";
                    $retVal = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($retVal)) {
                        echo $row['rooms'];
                    }
                    ?></h4>
                        </div>
                        <div class="reach">
                            <button class="showFormButton-8"><h4>BOOK</h4></button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>    
<!-- RAIGAD SECTION ENDS -->
   
   
    <div id="formOverlay" class="overlay">
        <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="mumbai" id="mumbai" required>
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_1" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_1">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="pune" id="pune">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_2" class="overlay">
        <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_2">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="nashik" id="nashik">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_3" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_3">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="nagpur" id="nagpur">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_4" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_4">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="kolhapur" id="kolhapur">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_5" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_5">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="satara" id="satara">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_6" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_6">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="ratnagiri" id="ratnagiri">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_7" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_7">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="aurangabad" id="aurangabad">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>

    <div id="formOverlay_8" class="overlay">
    <div id="formBox" class="form-box">
            <span class="close-button" id="closeFormButton_8">&times;</span>
            <form id="myForm" action="book.php" method="POST">
                <h2>Hotel</h2>
                  <select name="raigad" id="raigad">
                    <option value="">-- Select Hotel --</option>
                   </select>
                   <h2>Room Type </h2>
                  <select name="type" id="mumbai" >
                    <option value="single">Single Bed</option>
                    <option value="double">Double Bed</option>
                   </select><br>
                <h2>Name:</h2>
                <input type="text" name="name" required>
                <h2>Email:
                <input type="email" name="email" required>
                <h2>Check-in Date:
                <input type="date" name="checkin" required class="dates"><br>
                <h2>Staying No of Days:
                <input type="number" name="checkout" placeholder="1-31" required>

                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>
</div>

<!-- AURANGABAAD SECTION ENDS -->

    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script><script  src="js/pkgs.js"></script>
    <script  src="js/booking.js"></script><script  src="js/app.js"></script>
</body>
</html>