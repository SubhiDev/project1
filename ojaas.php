<?php

/**
 * @author Karunesh
 * @copyright 2020
 */



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OJASS'20 | NIT JSR</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" href="./img/Official_black.png" type="image/x-icon">
  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/flipclock/flipclock.css">

  <!-- Main Stylesheet File -->
  <link href="./css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Lexend+Giga|Lobster&display=swap" rel="stylesheet"> 

</head>

<aside style="text-align:center;display:none;">
  <h1>Please Resize.</h1>
</aside>

<style>
#video {
    width: 100vw;
    height: 100%;
    margin-top:-70px;

    /* object-fit: cover; */
    /* position: fixed; */
    left: 0px;
    top: 0px;
    z-index: 2;
}



.our-dir{
      border: 2px solid #1E90FF;
      border-radius: 10px;
      text-align: center;
      margin: 10px;
      z-index: 1;
      position: relative;
  }

  .our-dir:before,
  .our-dir:after{
      content: "";
      width: 100%;
      height: 104%;
      background: #1E90FF;
      position: absolute;
      top: 50%;
      left: 0;
      z-index: -1;
      transform: translateY(-50%) scaleX(0.3);
      transition: all 0.3s ease 0s;
  }

  .our-dir:after{
      width: 106%;
      left: 50%;
      transform: translate(-50%, -50%) scaleY(0.25);
  }

  .our-dir:hover:before{ transform: translateY(-50%) scaleX(0.7); }

  .our-dir:hover:after{ transform: translate(-50%, -50%) scaleY(0.7); }

  .our-dir img{
      width: 100%;
      height: auto;
      border-radius: 10px;
      transition: all 0.3s ease 0s;
  }

  .our-dir .dir-content{
      width: 93%;
      padding: 25px 0 10px;
      background: #1E90FF;
      position: absolute;
      bottom: 50px;
      left: 50%;
      opacity: 0;
      -webkit-clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
      clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
      transform: translateX(-50%);
      transition: all 0.3s cubic-bezier(0.5, 0.2,0.1,0.9);
  }

  .our-dir:hover .dir-content{
      bottom: 10px;
      opacity: 1;
  }

  .our-dir .title{
      font-size: 25px;
      font-weight: 600;
      color: #fff;
      letter-spacing: 1px;
      text-transform: capitalize;
      margin: 0;
  }

  .our-dir .post{
      display: block;
      font-size: 16px;
      color: #fff;
      text-transform: uppercase;
      margin-bottom: 10px;
  }

  .our-dir .social{
      padding: 0;
      margin: 0;
      list-style: none;
  }

  .our-dir .social li{
      display: inline-block;
      margin: 0 5px;
  }

  .our-dir .social li a{
      display: block;
      width: 35px;
      height: 35px;
      line-height: 35px;
      border-radius: 50%;
      background: #fff;
      font-size: 20px;
      color: #1E90FF;
      transition: all 0.3s ease 0s;
  }

  .our-dir .social li a:hover{
      background: linear-gradient(to bottom,#1E90FF, darkred);
      box-shadow: 0 0 0 5px rgba(255,255,255,0.3);
      color: #fff;
  }

  @media only screen and (max-width: 990px){
      .our-dir{ margin-bottom: 30px; }
  }
  
  .pat{
    padding:3%;
  }
</style>


<body>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader">
    <!-- <div id="loader-wrapper">
    <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
   -->
    <div style="text-align:center;">
      <br><br><br>
      <!-- <h1 style="text-align:center;">
        Loading ...
      </h1> -->
      <br><br><br><br>
    </div>

    <div style="display:inline-block;">
      <img src="./img/preloader2.gif">
    </div>
  </div>


  <!--==========================
  Header
  ============================-->
  <header id="header">


    <div class="container-fluid" style="color:#fff;">

      <!-- <div class="logo float-left ml-4">
        Uncomment below if you prefer to use an image logo
        <h1 class="text-light"><a href="./index.php" class="scrollto"><span>OJASS</span></a></h1>
        <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div> -->
      <div class=" float-left ml-4">
        <a href="" class="scrollto"><img src="img/logo-black-2.png" alt="" class="" height="70px" style="margin-top:-15px;"><span class="date">  27, 28 and 29 March' 2020 </span> </a>
        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Theme</a></li>
          <li><a href="#services">Events</a></li>

          <li><a href="#why-us">Celebrities</a></li>
          <li><a href="#portfolio">Guest Lectures</a></li>
          <li><a href="#portfolio2">Workshops</a></li>
          <li><a href="#team">Team</a></li>

          <!-- <li><a href="#clients">Sponsors</a></li> -->
          <li><a href="#faq">FAQs</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <!-- <li class="float-right notifications"><button onclick="notif()" style="background:transparent;border:none;"><i
                class="fa fa-bell-o fa-2x" aria-hidden="true"></i></button>
          </!-->
        </ul>

      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Notification Section
  ============================-->


  <div class="notifiation-panel" id="NotifPanel"
    style="background:aqua;right:0!important;display:block;height:500px; margin-top:70px; position:fixed;z-index:5;">

  </div>
  <!-- Notifications -->


  <!--==========================
    Social Media Side bar
  ============================-->

  <div class="icon-bar">
    <div class="social-btns">
      <a class="btn facebook" target="_blank" href="https://www.facebook.com/Ojassnitjamshedpur"><i class="fa fa-facebook"></i></a>
      <a class="btn twitter" target="_blank" href="https://twitter.com/ojass_nitjsr"><i class="fa fa-twitter"></i></a>
      <a class="btn instagram" target="_blank" href="https://www.instagram.com/ojass_techfest"><i class="fa fa-instagram"></i></a>
    </div>
  </div>

  <!--==========================
    Intro Section
  ============================-->



  <section id="intro" class="parallax clearfix" style="margin-bottom:6%;">
    <div class="container-fluid  h-100">
      <div class="row justify-content-center align-self-center fullscreen-bg" style="text-align:center;">
        <!-- <div class="col-md-6 intro-info order-md-first order-last" style="margin: 2% 0 0 0;">
          <img src="./img/small_black.png" width="280px" alt="theme logo">
          <h1>OJASS'20</h1>
          <h3><span>INDIC ERUDATION</span></h3>

        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid" style="margin-top:60px;">
        </div> -->

        <!-- <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <img src="img/logo.png" alt="" srcset="" width="" style="width:70vw;margin-top:-5%;">
        </div> -->

        <!-- COVID-19 announcement -->
        
        <div id="flash">
        </div>

        <video id="video"  playsinline loop muted preload="auto" class="fullscreen-bg__video">
        <source src="img/Teaser.mp4" type="video/mp4">
    </video>
    <div style="background:#fff;width:70px;top: 15vh;
          right: 10px">
    <a id="mute" style="cursor: pointer;
          height: 50px;
          width: 50px;
          position: absolute;
          top: 15vh;
          right: 10px;
          background-size: cover;z-index:10;
          background-image:url(img/mute.svg);padding:15px;
          "
          onClick="toggleSound()" >
       

      </a>   
     </div> 
    </div>




<!-- 
      <div class="row justify-content-center align-self-center" style="margin: 2% 0;margin-top:-3%;">
        <div class="col-md-2"></div>
        <div class="col-md-8" sytle="text-align:center;align-items:center;">

          <div class="clock" style=""></div>
          <div class="message"></div>
        </div>
        <div class="col-md-2"></div>
      </div> -->
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="parallax">

      <div class="">
        <div class="row">
          <!-- <div class="col-lg-1 col-md-1">
        </div> -->

          <div class="col-lg-4 col-md-5" style="margin-left:2%;">
          <br><br>
            <div class="about-img mt-5" >
            
            <video playsinline controls loop preload="auto" width="100%">
              <source src="img/theme.mp4" type="video/mp4">
            </video>
                <!-- <img src="img/rellax/SVG/Science-512.png" alt=""> -->
                <!-- <video width="100%" playsinline controls loop>
                <source src="img/Teaser.mp4" type="video/mp4">

                Your browser does not support HTML5 video.
              </video> -->
            </div>
          </div>

          <div class="col-lg-6 col-md-5">
            <div class="about-content">
              <h2>CELEBRATING INDIC ERUDITION</h2>
              <h3 class=" wow slideInRight"><span style="font-size: 25px;">O</span>jass is the Annual Techno-Management
                fest of NIT Jamshedpur.</h3>
              <p class="wow fadeIn" data-wow-delay="1s" style="text-align: justify;width:100%;"> Started in the year
                2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even
                film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate
                the future generation to dream big. Certified Workshops in diversed fields are conducted every year
                before the fest to help students understand the different technology trends in the market. A three-day
                spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan".
                Since its inception, Ojass has been receiving immense participation from the student community from all
                over India with the 2019 edition accounting for over 4000 participants. The prize money for this edition
                was ?18 Lac. OJASS 20 is slated to kick-off from 28th February 2020 and the grandeur will prevail for
                the
                next two days. Save these dates, for we are all set to make it Bigger and Better, than ever!</p>

            </div>
          </div>
          <div class="col-lg-1 col-md-2">
            <img src="./img/rellax/SVG/drone.svg" alt="" srcset="" width="120px" class="rellax">
          </div>
        </div>



      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section  ~~~Event Section
    ============================-->
    <section id="services" class="section-bg parallax">
      <div class="container">

        <header class="section-header">
          <h3>EVENTS</h3>
        </header>
        <div class="container descriptions">

          <p>Productivity is never an accident. It is always the result of a commitment to excellence, intelligent
            planning, and focused effort." We at OJASS- NIT Jamshedpur's Technomanagement fest, bring to you a plethora
            of events. An opportunity to showcase your skills at a large scale. Compete with the best and brightest of
            minds, in more than 80 events, ranging from testing your skills in building a startup to a treasure hunt. We
            have everything in store for you.</p>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;">
              <a href="./Events/EventDetails.php?branch=Deus-X-Machina" target="_blank">
              <img src = "./img/eventsIcons/deus_x_machina.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title">
              <a href="./Events/EventDetails.php?branch=Deus-X-Machina" target="_blank">Deus-X-Machina</a></h4>
              <!-- <p class="description"> -->
                <!-- <small class="description">
                  Production & Industrial Engineering
                </small> -->
              <!-- </p> -->
              <!-- <div class="description">
                  Production & Industrial Engineering
              </div> -->
            </div>
          </div>



          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;">
              <a href="./Events/EventDetails.php?branch=Arthashastra" target="_blank">
              <img src = "./img/eventsIcons/arthashastra.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title"><a href="./Events/EventDetails.php?branch=Arthashastra" target="_blank">Arthashastra</a></h4>
              <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> <-->
            </div>
          </div>


          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;">

                <a href="./Events/EventDetails.php?branch=Vishwa Code Genesis" target="_blank">
                  <img src="./img/eventsIcons/vishwacodegenesis.svg" height="140px"
                    style="margin-left:-30px; margin-top:-40px;">
                </a>
              </div>
              <h4 class="title">
                <a href="./Events/EventDetails.php?branch=Vishwa Code Genesis" target="_blank">Vishwa Code Genesis</a></h4>
              <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum</p> -->
            </div>
          </div>


          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;">
              <a href="./Events/EventDetails.php?branch=Rise of Machines" target="_blank">
              <img src = "./img/eventsIcons/rise_of_machines.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a></div>
              <h4 class="title">
              <a href="./Events/EventDetails.php?branch=Rise of Machines" target="_blank">Rise of Machines</a></h4>
              <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
            </div>
          </div>



          



           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;">
              <a href="./Events/EventDetails.php?branch=NCFF" target="_blank">
              <img src = "./img/eventsIcons/paraphernalia.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title"><a href="./Events/EventDetails.php?branch=NCFF" target="_blank">NCFF</a></h4>
              <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
            </div>
          </div>



           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;">
              <a href="./Events/EventDetails.php?branch=Armageddon" target="_blank">
              <img src = "./img/eventsIcons/armageddon.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title"> <a href="./Events/EventDetails.php?branch=Armageddon" target="_blank">Armageddon</a></h4>
              <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
            </div>
          </div>



        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 wow bounceInUp " data-wow-delay="0.2s"
            data-wow-duration="1.8s">
            <a href="./Events/event.php" target="_blank">
              <button type="button" class="float-right btn btn-outline-info btn-lg">Explore More</button>
            </a>
          </div>
        </div>

      </div>
    </section><!-- #services  Events-->

    <!--==========================
      Why Us Section  Celebrities
    ============================-->
    <section id="why-us" class="wow fadeIn parallax">
      <!-- <div class="container"> -->

        <header class="section-header">
          <h3>CELEBRITIES</h3>

        </header>
          <div class="container">
        <div class="row ">

        <div class="col-md-12">
            <div class="why-us-content">
              <br>
            
              <p >
                "The brightest stars shine to light up someone else's sky." And OJASS'20 has a torrent of stars to
                dazzle our skies and our evenings! We bring to you with 'stars in our eyes', our evening behemoths, all
                set to capture your minds and hearts from 27 March -  29 March, 2020! Hope to see y'all there!
              </p>
              <br>
              

              <!-- <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum.
                  Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore
                  fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut
                  enim ullam voluptas distinctio aut.</p>
              </div> -->



            </div>

          </div>


          <div class="col-md-4" style="height:auto;">
            <div class="why-us-img">
              <img src="img/clients/celebs/1.jpeg" alt="" class="img-fluid">
              <!-- <br>
              <br>
              <center>
                <h4>Past Celebrities</h4>
              </center> -->
            </div>


            <!-- <div id="owl-demo" class="owl-carousel owl-theme" style="">

              <div class="item"><img src="img/clients/celebs/day1.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day1a.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day1b.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day1c.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day2b.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day3a.jpg" alt=""></div>

            </div> -->


          </div>
          <div class="col-md-4">
            <div class="why-us-img">
              <img src="img/clients/celebs/2.jpeg" alt="" class="img-fluid">
              <!-- <br>
              <br>
              <center>
                <h4>Past Celebrities</h4>
              </center> -->
            </div>

          </div>
          <div class="col-md-4">
            <div class="why-us-img">
              <img src="img/clients/celebs/3.jpeg" alt="" class="img-fluid">
              <!-- <br>
              <br>
              <center>
                <h4>Past Celebrities</h4>
              </center> -->
            </div>

          </div>



          
          <!-- </div> -->
        </div>
        <br>
      <div class="container">
        <div class="guru row  features wow bounceInUp">
          <div class="col-md-6">
           
          </div>
          <div class="float-left col-md-6">
            
            
            <a href="./GuruGyan/gurugyan.php" target="_blank">
              <button type="button" class="float-right btn btn-outline-info btn-lg">Guru Gyan</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    </section>
    <!-- whu us Celebrities -->



    <!--==========================
      Portfolio Section ```` Guest Lectures
    ============================-->
    <section id="portfolio" class="section-bg parallax">
      <div class="container ">

        <header class="section-header">
          <h3 class="section-title">GUEST LECTURES</h3>

        </header>
        <div class="container descriptions">
          <p>
            The Guest Lecture Series of OJASS has always been one of the biggest highlights which attracts a majority of
            the student folks. Remaining constant since our inception, the series has inspired many students by giving
            them an opportunity to see the world through the eyes of some of the most eminent personalities. This year
            the students got to have an interactive session with Mr. Priyank Aryan, Mr. Sandeep Jain, Mr. Mukesh Kumar
            and other great personalities.
          </p>
        </div>


        <br>
        <div class="container">
        <!-- <div class="row portfolio-container "> -->


        <div class="owl-carousel guest-carousel">
          <img class="guest-img"  src="img/guest/guest1.jpg" alt=""  style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest2.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest3.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest4.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest5.jpeg" alt="" style="padding:10%!important;">
          <!-- <img src="img/guest/guest1.jpg" alt="">
          <img src="img/guest/guest2.jpg" alt="">
          <img src="img/guest/guest3.jpg" alt=""> -->
          <!-- <img src="img/clients/major.png" alt="">
          <img src="img/clients/codechef.png" alt=""> -->
        </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/guest/guest1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">PRIYANK ARYAN</a></h4>
                <p>App</p>
                <div>
                  <a href="img/guest/guest1.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/guest/guest2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">SANDEEP JAIN</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/guest/guest2.jpg" class="link-preview" data-lightbox="portfolio" data-title=""
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/guest/guest3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">MUKESH KUMAR</a></h4>
                <p>App</p>
                <div>
                  <a href="img/guest/guest3.jpg" class="link-preview" data-lightbox="portfolio" data-title=""
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- 
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- 
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

        <!-- </div> -->
        </div>

      </div>
    </section><!-- #portfolio Guest Lectures-->


    <!--==========================
      Portfolio2 Section ```` Workshops
    ============================-->


    <section id="portfolio2" class="section-bg parallax" style="background:#fff;">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">WORKSHOPS</h3>

        </header>
        <div class="container descriptions">
          <p>
            "Any sufficiently advanced technology is indistinguishable from magic." - Arthur C. Clarke.
            Being a techno-management fest, we at OJASS'20 consider it our moral duty to further the cause of
            technology. Hence, we spread our umbrella a little wider and added some tremendous workshops in the kitty of
            our successes. From delving deep into the complex world of robotics to untangling web development, from the
            intermingling of homo sapiens with Android to an exposure on capturing the perfect moment in photography,
            from looking out the 'window' to explore Linux to knowing the workings of our soon-to-be masters in Machine
            Learning, we've done it all and we're hella proud!


          </p>
        </div>


        <br>
        <!-- <div style="text-align:center;">
          <h1 style="text-align:center;">
            To be updated soon...
          </h1>
          </div> -->
          <center style="text-align:center;margin:0 auto;">
        <div class="row portfolio-container ">
          <div class="col-lg-3 col-md-3 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h6><a href="#">AUTONOMOUS ROBOTICS</a></h6>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop1.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <i href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-md-3 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h6><a href="#">INTERNET OF THINGS</a></h6>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop2.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h6><a href="#">LINE FOLLOWER ROBOTICS</a></h6>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop3.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h6><a href="#">MANAUL ROBOTICS</a></h6>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop4.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="owl-carousel guest-carousel">
          <img class="guest-img"  src="img/workshop/workshop1.jpg" alt=""  style="padding:10%!important;">
          <img class="guest-img" src="img/workshop/workshop2.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/workshop/workshop3.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/workshop/workshop4.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest5.jpeg" alt="" style="padding:10%!important;">
         
        </div> -->
        </center>

      </div>

    </section><!-- #portfolio2 Workshops-->



    
    <!--==========================
      Director & PI Section ````
    ============================-->

    <!-- <section class="section-bg parallax">
    <header class="section-header">
          <h3 class="section-title">DIRECTOR & PROFESSOR-INCHARGE</h3>

        </header>

    <div class="container mt-4">
      <div class="row" style="display:flex;justify-content:space-around;">
       <div class="col-md-4 col-sm-6">
           <div class="our-dir">
               <img src="img/guest/guest1.jpg">
               <div class="dir-content">
                   <h3 class="title">Karunesh Shukla</h3>
                   <span class="post">Director</span>
                   <ul class="social">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       
   </div>
 

    </div>
    <header class="section-header">
          <h3 class="section-title">DIRECTOR & PROFESSOR-INCHARGE</h3>

        </header>
    <div class="container mt-4">
      <div class="row" style="display:flex;justify-content:space-around;">
      <div class="col-md-4 col-sm-6">
           <div class="our-dir">
               <img src="img/guest/guest1.jpg">
               <div class="dir-content">
                   <h3 class="title">Sarvesh Mishra</h3>
                   <span class="post">PROFESSOR-INCHARGE</span>
                   <ul class="social">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-sm-6">
           <div class="our-dir">
               <img src="img/guest/guest1.jpg">
               <div class="dir-content">
                   <h3 class="title">Sarvesh Mishra</h3>
                   <span class="post">PROFESSOR-INCHARGE</span>
                   <ul class="social">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-sm-6">
           <div class="our-dir">
               <img src="img/guest/guest1.jpg">
               <div class="dir-content">
                   <h3 class="title">Sarvesh Mishra</h3>
                   <span class="post">PROFESSOR-INCHARGE</span>
                   <ul class="social">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>


      </div>
      </div>



    </section>
 -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="parallax section-bg" style="z-index:1024;
     
    ">
      <!-- min-height:100vh; Add this to above style attribute -->
      <div class="container">
        <header class="section-header">
          <h3>OUR TEAM</h3>
        </header>

        
    <link rel="stylesheet" href="./Team/s.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="./Team/j.js"></script>
   
<style>
  .back{
    opacity:.5;
    background: transparent;
    border: none;
    cursor:pointer; 
    
  z-index: 1024!important;
  }
.back:hover{
  opacity:1;
  color:red;
  transform: scale(1.5) linear .5s;
}

</style>

              <!-- <header class="section-header"> -->
              <!-- <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 240">
      <defs>
        <clipPath id="clip-path" transform="translate(-33.5 -242.84)">
          <path id="eam" d="M989.39,442.37c-3.84,9.22-9.74,12.3-14.35,12.3-5.13,0-8.46-5.64-5.64-18.71l10.77-50.49c6.66-30-10-37.67-21.53-37.67-14.87,0-27.68,11-38.44,26.4.77-18.2-11-26.4-21.53-26.4-14.61,0-27.42,10.51-37.93,25.63l2.56-11.53c2.31-9.74-3.07-14.1-12.3-14.1-10.76,0-20,5.38-28.7,12.3-5.12,4.1-3.33,12,0,14.1,2.31-2.05,3.85-3.08,5.13-3.08,2.3,0,3.58,2.31,2.56,6.41L815.6,444.92c-6.51,5.34-15.7,10-23.79,10-6.66,0-10.76-4.61-7.69-19l17.94-84.83a22.18,22.18,0,0,0-12-3.33c-6.41,0-13.07,2.31-17.43,7.43-6.41-5.63-14.86-8.45-26.39-8.45-34.75,0-63.15,42.43-64.53,86.14C669.76,446,648.56,457,631.65,457c-11.79,0-21.27-5.12-23.84-19,49.46-27.42,61-44.85,61-66.63,0-11.53-5.89-24.6-29.21-24.6-42.29,0-64.32,53.3-64.32,86.62a62,62,0,0,0,.51,7.17c-5.38,2.31-10.51,3.59-16.4,2.82-1.8,10,7.43,17.43,17.42,14.86a14.91,14.91,0,0,0,3.08-1.28c7.17,15.38,22,22.3,39,22.3,21.24,0,46-11.23,63.82-30.64,2.54,14.78,10.44,30.64,31,30.64,14.61,0,28.19-10.76,39-25.88-.25,20.24,11.79,25.88,23.84,25.88,10.73,0,24.23-7.09,35.37-16.61L809,475.94a22.18,22.18,0,0,0,12,3.33c9.23,0,19-4.36,21.53-16.15l15.63-73c6.92-8.2,14.35-13.33,23.58-13.33,8.45,0,7.94,6.92,6.15,15.12L870,475.94a22.18,22.18,0,0,0,12,3.33c9.23,0,19-4.36,21.53-16.15l15.89-74.57c6.66-7.18,13.58-11.79,22.29-11.79,8.46,0,8.2,6.92,6.16,15.12l-10.77,51c-6.41,30,11.79,36.39,24.6,36.39,14.35,0,35.37-12,35.37-30C997.08,444.93,994.26,442.37,989.39,442.37Zm-348-75.6c4.36,0,7.44,4.1,7.44,10,0,16.66-16.92,34.6-41.78,50.23C607.81,409.05,616,366.77,641.38,366.77Zm111.73,70c-6.91,9.48-17.68,16.14-25.88,16.14-7.94,0-13.84-5.64-13.84-18.45,0-27.93,11-68.42,42-68.42a34.9,34.9,0,0,1,12,2.05Z" fill="none"/>
          <path id="eam" d="M989.39,442.37c-3.84,9.22-9.74,12.3-14.35,12.3-5.13,0-8.46-5.64-5.64-18.71l10.77-50.49c6.66-30-10-37.67-21.53-37.67-14.87,0-27.68,11-38.44,26.4.77-18.2-11-26.4-21.53-26.4-14.61,0-27.42,10.51-37.93,25.63l2.56-11.53c2.31-9.74-3.07-14.1-12.3-14.1-10.76,0-20,5.38-28.7,12.3-5.12,4.1-3.33,12,0,14.1,2.31-2.05,3.85-3.08,5.13-3.08,2.3,0,3.58,2.31,2.56,6.41L815.6,444.92c-6.51,5.34-15.7,10-23.79,10-6.66,0-10.76-4.61-7.69-19l17.94-84.83a22.18,22.18,0,0,0-12-3.33c-6.41,0-13.07,2.31-17.43,7.43-6.41-5.63-14.86-8.45-26.39-8.45-34.75,0-63.15,42.43-64.53,86.14C669.76,446,648.56,457,631.65,457c-11.79,0-21.27-5.12-23.84-19,49.46-27.42,61-44.85,61-66.63,0-11.53-5.89-24.6-29.21-24.6-42.29,0-64.32,53.3-64.32,86.62a62,62,0,0,0,.51,7.17c-5.38,2.31-10.51,3.59-16.4,2.82-1.8,10,7.43,17.43,17.42,14.86a14.91,14.91,0,0,0,3.08-1.28c7.17,15.38,22,22.3,39,22.3,21.24,0,46-11.23,63.82-30.64,2.54,14.78,10.44,30.64,31,30.64,14.61,0,28.19-10.76,39-25.88-.25,20.24,11.79,25.88,23.84,25.88,10.73,0,24.23-7.09,35.37-16.61L809,475.94a22.18,22.18,0,0,0,12,3.33c9.23,0,19-4.36,21.53-16.15l15.63-73c6.92-8.2,14.35-13.33,23.58-13.33,8.45,0,7.94,6.92,6.15,15.12L870,475.94a22.18,22.18,0,0,0,12,3.33c9.23,0,19-4.36,21.53-16.15l15.89-74.57c6.66-7.18,13.58-11.79,22.29-11.79,8.46,0,8.2,6.92,6.16,15.12l-10.77,51c-6.41,30,11.79,36.39,24.6,36.39,14.35,0,35.37-12,35.37-30C997.08,444.93,994.26,442.37,989.39,442.37Zm-348-75.6c4.36,0,7.44,4.1,7.44,10,0,16.66-16.92,34.6-41.78,50.23C607.81,409.05,616,366.77,641.38,366.77Zm111.73,70c-6.91,9.48-17.68,16.14-25.88,16.14-7.94,0-13.84-5.64-13.84-18.45,0-27.93,11-68.42,42-68.42a34.9,34.9,0,0,1,12,2.05Z" fill="none"/>
        </clipPath>
        <clipPath id="clip-path-2" transform="translate(-33.5 -242.84)">
          <path id="t" d="M620.38,277.84c-29.48,13.07-54.08,2.05-82.52,2.05-24.35,0-71,9-71,51,0,12.3,7.69,23.83,21,23.83a25.4,25.4,0,0,0,10.77-2.56c-3.59-4.1-5.13-10.51-5.13-14.87,0-29,21.27-42,39.47-42a19.72,19.72,0,0,1,3.58.51L495.83,475.94c2.82,2.05,7.69,3.33,13.58,3.33,9.48,0,19.48-4.36,22-16.4l33.06-155.82c11,4.87,22.29,9.49,30.75,9.49C613.71,316.54,626,300.9,620.38,277.84Z" fill="none"/>
        </clipPath>
        <clipPath id="clip-path-3" transform="translate(-33.5 -242.84)">
          <path id="our" d="M374.36,347.8c-11.79,0-22.81,7.18-33.06,27.94l2.82-13.84c2.05-9.74-3.07-14.1-12.3-14.1-10.76,0-20,5.38-28.7,12.3-5.13,4.1-3.33,12,0,14.1,2.3-2.05,3.84-3.08,5.12-3.08,2.31,0,3.34,2.31,2.57,6.41l-14.39,67.38c-6.51,5.35-15.71,10-23.79,10-6.67,0-10.77-4.61-7.69-19l17.94-84.83a22.24,22.24,0,0,0-12.05-3.33c-9.22,0-19,4.36-21.53,16.15l-15.37,72.52c-6.92,8.2-14.61,13.33-23.58,13.33-7.69,0-11-4.61-8.71-15.12l15.63-72.78c2.31-9.74-3.07-14.1-12.3-14.1-10.76,0-20,5.38-28.7,12.3a8.41,8.41,0,0,0-2.06,2.44c.51-5.57.78-11.1.78-16.53,0-35.62-15.12-66.12-50.49-66.12-55.09,0-86.87,68.42-86.87,124.55,0,40.23,16.14,74.83,51,74.83,46.91,0,77.66-55.31,84.77-109.57a7.46,7.46,0,0,0,2.87,4.5c2.3-2.05,3.84-3.08,5.12-3.08,2.31,0,3.59,2.31,2.57,6.41l-12.05,52.53c-4.36,19.23-4.36,49.21,24.09,49.21,14.61,0,27.17-12.3,37.42-29-1.29,22.55,11.27,29,23.83,29,10.73,0,24.24-7.09,35.38-16.61l-2.84,13.28a22.21,22.21,0,0,0,12,3.33c9.22,0,19-4.36,21.52-16.15l3.08-15.63c13.07-59.2,25.11-70.73,33.57-70.73,5.38,0,7.94,2.82,7.94,6.41,0,3.07-1,6.4-2.81,7.94a24.69,24.69,0,0,0,7.43,1c13.32,0,20.5-12.56,20.5-24.09C393.07,357.54,386.66,347.8,374.36,347.8Zm-274,98.92c-18.7,0-26.65-21.52-26.65-47.92,0-42.54,21.27-98.92,52.28-98.92,14.35,0,25.88,15.89,25.88,46.38C151.92,413.92,122.71,446.72,100.41,446.72Z" fill="none"/>
        </clipPath>
      </defs>
      <g id="eam_mask">
        <g clip-path="url(#clip-path)">
          <path id="ea_path" d="M553.5,458.5l20-10,20-9,22-13,30-20,9-20,3-23-9-7h-21l-4,4-11,6s-6,11-7,13-9,17-9,17l-5,17-1,13v19l10,13,17,6h18l25-4,12-11,11-10,14-9v-20l6-18,10-17,12-13,22-6h12l24,9,6-31-22,134-3-31-15,12-20,13-22-1-5-14-9-24" transform="translate(-33.5 -242.84)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
          <polyline id="m_path" points="731 197.66 745 221.66 763 221.66 785 209.66 799 204.66 791 242.66 820 82.66 805 122.66 779 128.66 820 122.66 820 143.66 838 127.66 864 122.66 869 132.66 846 245.66 872 137.66 883 136.66 898 128.66 915 117.66 926 117.66 933 122.66 912 248.66 923 219.66 942 218.66 958 206.66 964 189.66" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
        </g>
      </g>
      <g id="t_mask">
        <g clip-path="url(#clip-path-2)">
          <polyline id="t_path" points="447 122.66 447 99.66 447 80.66 455 61.66 478 49.66 498 46.66 516 46.66 518.41 47.6 534 53.66 561 56.66 601 52.66 517 41.66 474 247.66" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
        </g>
      </g>
      <g id="our_mask">
        <g clip-path="url(#clip-path-3)">
          <polyline id="r3_path" points="294 115.66 285 119.66 272 121.66 264 130.66" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
          <polyline id="r2_path" points="288 147.66 302 140.66 316 130.66 321 123.66 330 117.66 348 117.66 350 130.66 341 143.66 337 156.66" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
          <polyline id="r_path" points="129.19 123.5 143 123.66 168 118.66 171 95.66 152 190.66 150 199.66 152 210.66 157 221.66 164 221.66 178 218.66 187 211.66 197 203.66 218 194.66 238 89.66 213 217.66 219 221.66 231 223.66 241 219.66 253 215.66 270 209.66 277 206.66 299 89.66 269 248.66" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
          <path id="o_path" d="M129.5,288.5c-13,0-10,1-13,0s-13,3-20,8-17,20-17,20l-12,19-7,16-6,22v29l5,29,11,22,22,15,24-11,17-16,13-23,13-33,5-30v-28l-9-21-16-15-11-5Z" transform="translate(-33.5 -242.84)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="42"/>
        </g>
      </g>
    </svg> -->

                   
                  <!-- </header> -->

    <div>
        <div class="vcenter"  id="menu">
                <section class="section" >
                  <div class="container">
                  <!-- <ul class="team">
                    <li class="team__members" id="1">
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="Team\Images\Ojass_20_core.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
 
                
                      </div>
                    </li>
                  
                    <li class="team__members" id="2">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team\Images\Ojass_20_events.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="3">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team\Images\Ojass_20_hospitality.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="4">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team\Images\Ojass_20_publicity.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="5">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team\Images\Ojass_20_robotics.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="6">
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="7">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="8">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="9">
                       <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="10">
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="11">
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="12">
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="13">
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                    <li class="team__members" id="14"> 
                       <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="./Team/Images/sq.jpg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </li>
                  </ul> -->
                  <div class="row" style="text-align: center;">
                      <div class="col-md-15 col-lg-15 team__members" id="1">
                      <div class="userProfile" >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/867D89C3.png" width="500px"  height="500px" alt="Photo" class="userProfile__image">

                          
                        </figure>
                      
 
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="2">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/D527174F.png" alt="Photo"  class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="3">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/Ojass_20_corporate.svg" alt="Photo"  class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="4">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/C1BCA553.png" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="5">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/ezgif.com-gif-maker (2).png" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>

                  </div>
                  <div class="row middle-row" style="text-align:center;margin:0 6%;">
                    <div class="col-md-3 team__members" id=6>
                      <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/B26CE425.png" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </div>
                    <div class="col-md-3 team__members" id="7">
                      <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/Ojass_20_event_managment.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </div>
                    <div class="col-md-3 team__members" id="8">
                      <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/Ojass_20_logistics_and_transport.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </div>
                    <div class="col-md-3 team__members" id="9">
                        <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/B500D975.png" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                    </div>
                   </div>



                  <div class="row" style="text-align: center;">
                      <div class="col-md-15 col-lg-15 team__members" id="10">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/Ojass_20_workshop_planning.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="11">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/Ojass_20_decoration.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="12">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="img/rellax/SVG/Ojass_20_app_&_web.svg" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="13">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/10AAA313.png" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>
                      <div class="col-md-15 col-lg-15 team__members" id="14">
                          <div class="userProfile"  >
                        <figure class="userProfile__thumbnail">
                          <img src="Team/Images/5BDB90AB.png" alt="Photo" class="userProfile__image">
                        </figure>
                      
                
                      </div>
                      </div>

                  </div>
                    </div>
                
</div>
<div class="teamDetails" style="height:auto!important;">


                  <div id="sec1" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;">
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    <strong class="team-name"> CORE TEAM</strong>
                   <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="./Team/style.css">
<!-- 
<br><br><br><br> -->

<!-- <div class="loader loader--style7" id="loader" title="6">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
          <rect x="0" y="0" width="4" height="20" fill="#FF6700">
            <animate attributeName="opacity" attributeType="XML"
              values="1; .2; 1" 
              begin="0s" dur="0.6s" repeatCount="indefinite" />
          </rect>
          <rect x="7" y="0" width="4" height="20" fill="#FF6700">
            <animate attributeName="opacity" attributeType="XML"
              values="1; .2; 1" 
              begin="0.2s" dur="0.6s" repeatCount="indefinite" />
          </rect>
          <rect x="14" y="0" width="4" height="20" fill="#FF6700">
            <animate attributeName="opacity" attributeType="XML"
              values="1; .2; 1" 
              begin="0.4s" dur="0.6s" repeatCount="indefinite" />
          </rect>
        </svg>
</div> -->

<!-- <div style="height:100%;"> -->
<div class="row" style="display:flex;flex-direction:row;justify-content:center;">

<div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1xSU1XPXYAB6Sg3QWScNZjK7fWvy28irU">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/onkar.kumar.7503" class="fa fa-facebook"></a></li>
                          <!-- <li><a href="#" class="fa fa-twitter"></a></li>  -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/onkar-kumar-71404214a" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                      <h3 class="title">Onkar kumar </h3>
                     <span class="post">Technical Secretary</span>
                 </div>
             </div>
  </div>


</div>

<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
  <!-- <div class="col-md-3">

  <div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1xSU1XPXYAB6Sg3QWScNZjK7fWvy28irU">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                          <li><a href="#" class="fa fa-twitter"></a></li> 
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Onkar Kumar</h3>
                     <span class="post">Technical Secretary</span>
                 </div>
             </div>
  </div>

  </div> -->



  <div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1SY4p_13nnAco7xsoghWFAjfTPGKmCUOW">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/jeetkumaryadav" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://instagram.com/zee.it?igshid=zob3ap5pv5t" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/jeet-kumar-yadav-3978a9155" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Jeet kumar </h3>
                     <span class="post">General Secretary</span>
                 </div>
             </div>
  </div>
  </div>
  <div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1l1Nfbw28CneAXQJFd1jES4yUDMXOBaL1">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/polluri.chaitanyaprakash" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/p__c_p/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/chaitanyapoluri" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">P.Chaitanya Prakash</h3>
                     <span class="post">Joint Secretary</span>
                 </div>
             </div>
  </div>
  </div>


  <div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1q4v6oGT3OKlDsSVCgNClLLiCvAkxtpki">
                     <ul class="social">
                         <li><a target="_blank" href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Rishikesh</h3>
                     <span class="post">Joint Technical Secretary</span>
                 </div>
             </div>
  </div>
  
</div>
</div>
  <div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
 <div class="col-md-4">
 <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1H6776rYiDujdztRMEg0qOhAZvqAPdpjP">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/anurag.k.bhardwaj1" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/anuragkr98/?hl=en" class="fa fa-instagram"></a></li>
                         <li><a  target="_blank" href="https://www.linkedin.com/in/anurag-kumar-b1918b140" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Anurag kumar </h3>
                     <span class="post">Finance secretary</span>
                 </div>
             </div>
  </div>
 </div>

  <div class="col-md-4">
    <div style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1w2SVWHQY4Ay2yFZc0Up_Y4JK-0TC3fVs">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100009259789749" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/dheeravath-ganesh-416836165" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Dheeravath Ganesh</h3>
                     <span class="post">Executive Secretary</span>
                 </div>
             </div>
  </div>
  </div>

  <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1JotKoYOGpmVuuh0csCu6-PKwVSfRmCXu">
                     <ul class="social">
                         <li><a target="_blank" href="https://m.facebook.com/akshay.akshit.3" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/akshay.akshit/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/mwlite/me" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Akshay kumar  </h3>
                     <span class="post">Executive Secretary</span>
                 </div>
             </div>
  </div>
  </div>
</div>



<!-- </div> -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
      
    // $(".your-class").slick({
    //   slidesToShow: 3,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 2000,
    //   lazyLoad: 'ondemand',
    // });
        
    $('#loader').fadeOut(3000);
    // $(".your-class").fadeOut(5000);

  });
</script>

<script>
</script>
                </div>
                  <div id="sec2" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    <strong class="team-name">PLANNING & DEVELOPMENT</strong>
                               
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">

  
  <div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
 <div class="col-md-4">
 <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1wNaTPwy-dczahXNmk-C1uPU5xAHrdx8w">
                     <ul class="social">
                         <li><a target="_blank" href="https://m.facebook.com/shatanik.bose" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://instagram.com/shatanikbose?igshid=8g6zs9x4qud8" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/shatanik-bose-9738a4137?originalSubdomain=in" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Shatanik Bose</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
 </div>

  <div class="col-md-4">
    <div style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1LxlEF5aaKYPnaEgOtQQnJxRAz4RmFL0o">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/echt.srivastava" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/aman-kumar-srivastava-27152113a" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Aman Kumar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>

  <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1_bT3dMux4fnQdYCSCqiaCvrS5dRP_OPR">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/subhashish.kar98" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/subhashish_18/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/subhashish-kar-946bab194" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Subhashish Mohan Kar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec3" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>
                   <strong class="team-name"> CORPORATE RELATIONS & MARKETING</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
  <div class="col-md-3">

  <div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1IAcSYiLXn0rtvMmTlq8YRz2kbbnW5R-L">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/shubham.gaurav.129" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/propitious_pride/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/shubham-gaurav-140603153" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Shubham Gaurav</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>

  </div>

<div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=126ggWcZf0H9-30wdneOOg3OEZx1m_qoF">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/nidhaan.agarwal.5" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/nidhaan-agarwal-758115131" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Nidhaan Agarwal</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
  <div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1Xen_zyIV596tmTahHNUHAf1gbgdAVxOg">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/sachin.sourav.9" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/sachin-sourav-b89727161" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Sachin Sourav</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>


  <div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1BFI8S3dlX1IAw3EqVsL6Q9pFqIYti23m">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Bijay Mahapatra</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec4" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                   <strong class="team-name">PUBLIC RELATIONS</strong>
                   <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


  
<div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
    <div class="col-md-3">
    <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1r0PnQSCOUgo7Ay9ID8Yx1uTuCGT0oo9C">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100009340620995" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="https://www.instagram.com/a_crazy_saint0/" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Prachi Fulzele</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
    </div>
   
     <div class="col-md-3">
       <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1OO1JHid54Uw5JjcL0QNc8u8AHA3Jzdu5">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/divyansh.rock.56" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="https://www.instagram.com/invites/contact/?i=1fxcsrks5mlqi&utm_content=1kdvpxd" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Divyansh</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   
     <div class="col-md-3">
       <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=12xitj5-GsOuaZEHGN5jwCd70dIP2-GmV">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/kishore.nayak.14289" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Banoth Kishore</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
     <div class="col-md-3">
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1pbHtBjxGSmf-4S6PpBSPWyMR_GeK8V3r">
                        <ul class="social">
                            <li><a target="_blank" href="https://m.facebook.com/gaurav.mridul?ref=bookmarks" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Gaurav Mridul</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>

   </div>
   <div class="row">
   <strong style=" display:flex;
  font-size:25px;
  font-style: italic;
  color: #696592;justify-content:center!important;flex-direction:row;margin-left:38%;">MEDIA RELATIONS</strong>
   
   </div>
  
   <div class="row"  style="display:flex;flex-direction:row;justify-content:center;">


   <div class="">
  
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1_HRZKH0Gu94khdBxYPGUesw9Hxa9yGs1">
                        <ul class="social">
                            <li><a target="_blank" href="https://m.facebook.com/nivedita.gupta.73?ref=bookmarks" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="https://www.instagram.com/nivedita.apr21/" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/nivedita-gupta-b91980a6" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Nivedita Gupta</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>
   <div class="">
       <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1IpkZtWJfsZ7zicXpI1fBhOeZupb0oo6S">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/usha.rawani.3" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a  target="_blank" href="https://www.instagram.com/day_spring23/" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/usha-kumari-09aa6a152/" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">usha kumari</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   
   
   </div>








   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>                  </div>
                  <div id="sec5" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                  <strong class="team-name">TEAM CO-ORDINATORS & SPOKESPERSON</strong>
                  <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:center;">
  <!-- <div class="col-md-3">

  <div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li> 
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Sangam Kumar</h3>
                      <span class="post">Web Developer</span> 
                 </div>
             </div>
  </div>

  </div>

<div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li> 
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Alluru Reddiah Reddy</h3>
                     <span class="post">Web Developer</span> 
                 </div>
             </div>
  </div>
  </div> -->
  <div>
    <div  class="" style="margin:10px;width:220px;margin-right:100px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/ARREDDY03" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="Instagram.com/prashanthreddaih_" class="fa fa-instagram"></a></li>
                         <li><a  target="_blank" href="https://www.linkedin.com/in/reddaiah-reddy-alluru-73b6b8145" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Alluru Reddiah Reddy</h3>
                      <span class="post">Team Co-Ordinator</span> 
                 </div>
             </div>
  </div>
  </div>


  <div>
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1l59cczqmglLttlBhGF-Zql23pn08PHCj">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/sivaramakrishna.gade.3" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/siva-gade-25a785131" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Gade Sira Rama Krishna</h3>
                      <span class="post">Spokesperson</span> 
                 </div>
             </div>
  </div>
  
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec6" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    <strong class="team-name">HOSPITALITY</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


  
<div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
    <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1xmQlCjgCdwxTLs9f9FDw-dENJYNdpjIw">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/m.singh1913" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Mansi</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
    </div>
   
     <div class="col-md-4">
       <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1-wioSlWIBmECKq1t2TnQepwNxXAZfNVv">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100011425120825" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="http://Instagram.com/i.mshashi" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Shashi Bhushan Chandel</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   
     <div class="col-md-4">
       <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=13jtjvbv7qf7YdnNCHl84gwc94wdJ6gc3">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/sajeev.suman.9" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Sanjeev Suman</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   </div>

   <div class="row" style="display:flex;flex-direction:row;justify-content:space-between;margin-left:12%;">

   <div class="col-md-6">
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=14bCQ8Rx8Hm0JoztlxSeScCi6_7R4sfpv">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/vankaraboena.mallikarjun" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="https://www.instagram.com/malli_077/" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Malikarjun</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>

   
   <div class="col-md-6">
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/kamsani.uday" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="https://www.instagram.com/uday_reddy13/" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/uday-reddy-084147131" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Uday Kumar Reddy</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>
   
   
   </div>








   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>                  </div>
                  <div id="sec7" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                   <strong class="team-name"> EVENT MANAGEMENT</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


  
<div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
    <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=18ThS5VNOVqKVqNKUqYqGlKAt3Zysbl7L">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100003816556801" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="https://www.instagram.com/pavanguntupally12/" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/pavan-kumar-guntupalli-6436aa130" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Guntupalli Pavan Kumar</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
    </div>
   
     <div class="col-md-4">
       <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Kotla Venkata Sai Krishna Dheeraj</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   
     <div class="col-md-4">
       <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1yIC9vu7nMZuSiP-GIkQSLiPwrLI61gRo">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100008242112637" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Boya Sai Nikhil</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   </div>

   <div class="row" style="display:flex;flex-direction:row;justify-content:space-between;margin-left:12%;">

   <div class="col-md-6">
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1mqhEhj2YkQk8hHnTEEFcXojSOeSRJwtn">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/raamansai" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/raaman-kilaru" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Kilaru Sai Venkata Raaman</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>

   
   <div class="col-md-6">
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1r51AN0IIdN51mjEcZB9VMgqZXHQmN0xM">
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Amarnath Singh</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
   
   
   </div>








   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>                  </div>
                  <div id="sec8" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    <strong class="team-name">LOGISTICS & TRANSPORT </strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">

  
<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
    
 <!-- <div class="col-md-4">
 <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Cheerala Ganesh</h3>
                     <span class="post">Web Developer</span>
                 </div>
             </div>
  </div>
 </div> -->

  <div class="col-md-3">
    <div style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1VvMfcf5T0GsYHwWJyRytE_cx3Warnrzt">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/rahul.katamneni.94" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Katamnuni Rahul</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>

  <!-- <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                     <ul class="social">
                         <li><a target="_blank" href="https://m.facebook.com/Kalyan.Nani01" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a target="_blank" href="https://www.instagram.com/kalyan_0198/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/kalyan-boya-622711145" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Boya Kalyan</h3>
                     <span class="post">Web Developer</span>
                 </div>
             </div>
  </div>
  </div> -->
<!-- </div> -->



  
<!-- <div class="row" style="display:flex;flex-direction:row;justify-content:space-around;margin-left:5%;margin-right:10%;"> -->
    
    <div class="col-md-3">
    <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1M-G2tHu528M0ZEBRwOu_yBkvLEvz5yEr">
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Dannana Bhargav</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
    </div>
   
     <div class="col-md-3">
       <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1P64ggOKLt-SlPpaZMI7hxB-NpklQqOFM">
                        <ul class="social">
                            <li><a target="_blank" href="https://m.facebook.com/mohan.sai.9028" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/mohan-sai-paidi-885a84145" class="fa fa-linkedin"></a></li>
                        </ul> 
                    </div>
                    <div class="team-content">
                        <h3 class="title">Paidi Mohan Sai</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   
     <div class="col-md-3">
       <div  style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Aditya Parihar</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
     </div>
   </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec9" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                   <strong class="team-name"> ROBOTICS</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
  <div class="col-md-4">

  <div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1dqUwz4mubgMmLuY1Rbd3Ae8JavWCj9rY">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/syedsahil3999" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/_sahil_syed/tagged/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/sahil-syed-3209b0190" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Syed Sahil</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>

  </div>

<div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=18CHMN0Bl0q7NkSqhV-xspluCvOYVGIK7">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/injam-praveen-kumar-82b896151" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Injaam praveen kumar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
  <div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=18uSb0nzUL6rBd1_IGPt7yuvd6X8Pxiyc">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/pavan.cherukuri99" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/cherukuri-pavan-sri-sai-813a82145" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Cherukuri Pawan Sai</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>


</div>
<div class="row" style="display:flex;flex-direction:row;justify-content:space-between;margin-left:12%;">


<div class="col-md-6">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1eu7wnxyQ65TFfVvpG4pC71AgWmT5x9nC">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100007885389982" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/subham-kumar-5aa2077b" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Subham Kumar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  
</div>


<div class="col-md-6">
   <div style="margin:10px;width:220px;">
                <div class="our-team">
                    <div class="pic">
                        <img src="https://drive.google.com/uc?id=1eP8su-KlMaPMK8yLws0C5ubXU2Ib4Z4x">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/ketankumar.patel.1656" class="fa fa-facebook"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Ketan Kumar Patel</h3>
                        <!-- <span class="post">Web Developer</span> -->
                    </div>
                </div>
     </div>
   
   
   
   </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec10" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    <strong class="team-name">WORKSHOPS</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">

  
  <div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
 <div class="col-md-4">
 <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1LdwC9yY0FF4nj73RL_3xUPQVRiZJ7IhE">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/sandeep.yadav.54379" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/sandeep-yadav-603295191" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Sandeep Yadav</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
 </div>

  <div class="col-md-4">
    <div style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=14WzvSIZDIYe8_SZMXBogK3PwEHQlXyZ2">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Naman Mishra</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>

  <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1Fby9Wh5CS30l5DUDCgMZgIAG1CFige-i">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">P.Bhargav Kumar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec11" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                 <strong class="team-name">DECORATIONS</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">

  
<div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
 <div class="col-md-3">
 <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1H99ISkPUFuA-BIbtuXUSfs46LaJlgrCj">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100008294197360" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="www.Instagram.com/manohar_nadiminti" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="www.linkedin.com/in/manoharnadiminti" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Nadiminti Manohar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
 </div>

  <div class="col-md-3">
    <div style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1ToopixK4SgtAxb9Uzt8SdHOEiPGSk8AH">
                     <ul class="social">
                         <li><a target="_blank" href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Jajjuvarapur Sushma</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>

  <div class="col-md-3">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1V7NpnldwckjTbQGc3Ddmx3bTRkKuI3dO">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/parwez.akhtar.313" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="instagram.com/parwez.akh" class="fa fa-instagram"></a></li>
                         <li><a  target="_blank" href="https://www.linkedin.com/in/parwez-akhtar-9b3092153" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Parwez Akhtar</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>

  <div class="col-md-3">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1fhMPElognOoOt3wyb74t-OZ1bkL0dsSs">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/pranathi.botsa.75" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a  target="_blank" href="https://instagram.com/_pranathi_pranee_?igshid=1925wokbkybg1" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/pranathi-botsa-972964149/" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Pranathi</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec12" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    <strong class="team-name">APP & WEB DEVELOPMENT</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
  <div class="col-md-3">

  <div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1JqihEF_UcwXcC-XD7pNatyilXgzllqJx">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100006795335002" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/91_shubham/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/shubhamkumara3" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Shubham</h3>
                     <span class="post">Web Developer</span>
                 </div>
             </div>
  </div>

  </div>

<div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1QGx4epx-2GE3jbgj_qQtbRtxDz3Nf46G">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/mohit.k.jha.5" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/mohitjha08/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/mohit-jha-03a0b3149/" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Mohit</h3>
                     <span class="post">Web Developer</span>
                 </div>
             </div>
  </div>
  </div>
  <div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1sXbjGG2PhUYqKL5uApW4d0mXLm9ryuvZ">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Anirudh</h3>
                     <span class="post">App Developer</span>
                 </div>
             </div>
  </div>
  </div>

  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

  <div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1wvqmAaNth0BY5fG6VspL1SsKrvffOaEm">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/kumar.naman.707" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/kumar-naman-55b356128" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Naman</h3>
                     <span class="post">App Developer</span>
                 </div>
             </div>
  </div>
  
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec13" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>

                    <strong class="team-name">CREATIVE TEAM</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">

  
  <div class="row" style="display:flex;flex-direction:row;justify-content:space-between;">
    
 <div class="col-md-4">
 <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1gSYHc8Q6TVTlDn_CJSGQwiH1Uk4tvjuL">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/pratik.singh.9887" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/_pratik__singh_/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/pratik-singh-6163a1151" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Pratik Singh</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
 </div>

  <div class="col-md-4">
    <div style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1hMLVqXS3SzsWJWsNVUuE29SOMYQ4-3dt">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/iampratikranjan" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/_the_hopeless_romantic_/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/impr2611/" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Pratik Ranjan</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>

  <div class="col-md-4">
    <div  style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1SXLoCvnSyxf5UVvJ7wKB4iLiV65Rv2Hg">
                     <ul class="social">
                         <li><a target="_blank" href="https://m.facebook.com/d4danton" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/d4danton/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/sudhanshu-prakash-a05661158" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Sudhanshu Prakash</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>
                  </div>
                  <div id="sec14" style="display: none;width:900px;justify-content:center;margin:4% auto; height:auto;text-align:center;" >
                    <button class="back"><i style="font-size:28px;" class="fa fa-arrow-left" aria-hidden="true"></i></button>
                     <strong class="team-name">
                    DIGITAL PUBLIC RELATIONS</strong>
                    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
<link rel="stylesheet" href="style.css">


<div class="row your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
  <div class="col-md-4">

  <div  class="" style="margin:10px; width:220px;" >
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1MFimN5E0csD9VTXaz-_-rEcsGQuHI4TI">
                     <ul class="social">
                         <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100013646169905" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Mehendi Tubid</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>

  </div>

<div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=15vFKhaedRgZ-1oVqKfJfzjNX8Py96-Sr">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Rhea Srivastava</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>
  <div class="col-md-4">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=1dYYH0_0veROcScPXqYcUR7mDk5RDzG8-">
                     <ul class="social">
                         <li><a target="_blank" href="https://m.facebook.com/amar.gaikwad.16144" class="fa fa-facebook"></a></li>
                         <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                         <li><a target="_blank" href="https://www.instagram.com/amararjungaikwad/" class="fa fa-instagram"></a></li>
                         <li><a target="_blank" href="https://www.linkedin.com/in/amar-arjun-gaikwad-76b517141" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">Amar Arjun Gaikwad</h3>
                     <!-- <span class="post">Web Developer</span> -->
                 </div>
             </div>
  </div>
  </div>


  <!-- <div class="col-md-3">
    <div  class="" style="margin:10px;width:220px;">
             <div class="our-team">
                 <div class="pic">
                     <img src="https://drive.google.com/uc?id=19qkFRZQTLTEDxKCRvDWs-Vr1vnrYe7RX">
                     <ul class="social">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                          <li><a href="#" class="fa fa-twitter"></a></li> 
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                     </ul>
                 </div>
                 <div class="team-content">
                     <h3 class="title">*****</h3>
                      <span class="post">Web Developer</span> 
                 </div>
             </div>
  </div>
  
</div> -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="slick/slick.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      lazyLoad: 'ondemand',
    });
  });
</script>

                  </div>

                  </div>
                  </section>
                  </div>



           <!-- <div style="text-align:center;">
          <h1 style="text-align:center;">
            To be updated soon...
          </h1>
        </div> -->

      </div>
    </section><!-- #team -->




    <!--==========================
      Awards and Recognition
    ============================-->
   <section id="award" class="">

      <div class="container " style="text-align: center;">

        <header class="section-header">
          <h3>UNDER THE PATRONAGE OF</h3>

        </header>
        <div class="container descriptions">

          <p>OJASS-The Techno-Management fest of NIT Jamshedpur has received various recognitions and patronage from
            various prominent organizations. Some of the prominent ones are:-</p>
        </div>

        <div class="row container your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
          <div class="col-md-3 pat" >
            <div class="" style="">
              <div>
                <div>
                  <img src="./img/patronage/di.png" width=250px>

                </div>
                <div class="team-content" style="display:flex;justify-content:center;">
                  <h3 class="title"></h3>

                </div>
                <div style="display:flex;justify-content:center;">
                  <strong> Digital India for its innovative challenge with the motto - "power to empower".</strong>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3 pat">
            <div class="" style="">
              <div class="">
                <div >
                  <img src="./img/patronage/cee.jpg" width=250px>

                </div>
                <div style="display:flex;justify-content:center;">
                  <strong> Center for environment education(CEE) to improve public awareness and understanding of the
                    environment.</strong>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3 pat">
            <div class="" style="">
              <div class="">
                <div >
                  <img src="./img/patronage/sayen.png" width=180px height="200px">

                </div>
                <div style="display:flex;justify-content:center;">
                  <strong> South Asia Youth Environment Network(SAYEN) for its approach and initiative towards
                    environmental change.</strong>
                </div>
              </div>
            </div>




          </div>


       
          <div class="col-md-3 pat">

            <div class="">
              <div class="">
                <div >
                  <img src="./img/patronage/unesco.jpg" width=250px>
                  <div style="display:flex;justify-content:center;">
                    <strong>
                      UNESCO for the promotion of technical knowledge and education.</strong>
                  </div>

                </div>

              </div>
            </div>


          </div>
</div>


    </section>




    <!--==========================
      Clients Section
    ============================-->

    <!-- <section id="clients" class="wow fadeInUp parallax section-bg">
      <div class="container ">

        <header class="section-header">
          <h3>OUR SPONSORS</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/jktyre.png" alt="">
          <img src="img/clients/career.png" alt="">
          <img src="img/clients/electronics1.jpg" alt="">
          <img src="img/clients/sound.png" alt="">
          <img src="img/clients/event3.png" alt="">
          <img src="img/clients/knwldg.png" alt="">
          <img src="img/clients/major.png" alt="">
          <img src="img/clients/codechef.png" alt="">
        </div>

      </div>
      <div class="row">
        <div class="container">
          <div class="col-md-12 float-right">
            <a href="./Sponsor/sponsor.php" target="_blank">
              <button type="button" class="float-right btn btn-outline-info btn-lg">Explore More</button>
            </a>
          </div>
        </div>
      </div> 
    </section> -->

    <!-- #clients -->



    <!--==========================
      Frequently Asked Questions Section
    ============================-->

    <section id="faq" class="parallax">
      <div class="container ">
        <header class="section-header">
          <h3>FREQUENTLY ASKED QUESTIONS</h3>
        </header>

        <ul class="nav nav-pills justify-content-center" role="tablist">
          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s"
            style="border-right:1px solid;">
            <a class="nav-link active" data-toggle="pill" href="#tab1">General</a>
          </li>

          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            <a class="nav-link" data-toggle="pill" href="#tab2">Events </a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="tab1" class="container tab-pane active"><br>
            <div id="faq1" class="faq">
              <ul id="faq-list1" class="faq-list wow fadeInUp">
                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq18">What is Ojass?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq18" class="collapse" data-parent="#faq-list1">
                    <p>
                      Ojass,the annual Techno-Management fest of NIT Jamshedpur is one of the East India's biggest
                      college festivals. It will span for 3 days: March 27,2020 to March 29,2020. The spirit of Ojass
                      lies in
                      encouraging sound practices,making precision engineering a way of life,effectively bringing about
                      a paradigm shift from classroom to path-breaking innovation. </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq21" class="collapsed">What about the accomodation?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq21" class="collapse" data-parent="#faq-list1">
                    <p>
                      Accommodation will be provided for the students in the college hostels. </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">How far is the college from railway station?
                    <i class="ion-android-remove"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list1">
                    <p>
                      From Tatanagar junction, college is located at a distance of 6 KM. From Adityapur Railway Station,
                      it is located at a distance of 1.6 KM. </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">How to register for Campus Ambassador ? And
                    what are the benefits of becoming Campus Ambassador?<i class="ion-android-remove"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list1">
                    <p>
                      You will get yourself registered free in the Ojass if you bring 20+ registrations. Also you will
                      get free accommodation, ojass t-shirt, kits and goodies. You will get a work experience of
                      leadership and management and for that we will award a campus certificate. To Register for Campus
                      Ambassador : <a target="_blank" href="https://forms.gle/pkquhZRyDYwM1aG96">Click here!</a>
                      
                      For further queries, feel free to contact-<br>
                          Prachi:&nbsp; (+91-74883 09597)<br>
                          Gaurav: &nbsp; (+91-79924 25023)<br>
                       </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Still have doubts ?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list1">
                    <p>
                      Feel free to drop us a message at our Facebook page or contact&nbsp;: <br>
                        Gaurav Mridul : +91 79924 25023
                      <br>
                        Prachi : +91 74883 09597
                      <br>
                        Divyansh : +91 62990 79553
                      <br>
                      Kishore : +91 89198 45029
                      
                      
                      . We will
                      get back to you soon.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div id="tab2" class="container tab-pane fade"><br>
            <div id="faq2" class="faq">
              <ul id="faq-list2" class="faq-list">
                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq6">What are the types of events in Ojass ?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list2">
                    <p>
                      Ojass is a plethora of many events. It includes branch events, gaming events, formal events,fun
                      events etc.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq7" class="collapsed">Is there any special arrangements during
                    night for girls participating in Ojass ?<i class="ion-android-remove"></i></a>
                  <div id="faq7" class="collapse" data-parent="#faq-list2">
                    <p>
                      All the arrangement of mattresses would be provided inside the hostel itself.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq8" class="collapsed">Are there any online events?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq8" class="collapse" data-parent="#faq-list2">
                    <p>
                      Yes,there will be online events. For details of the online events stay updated to our facebook
                      page.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq9" class="collapsed">How can we participate ?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq9" class="collapse" data-parent="#faq-list2">
                    <p>
                      Get registered through our android app or you can get registered in our campus at the time of
                      fest.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq10" class="collapsed">Will participation certificate be given for
                    events ?<i class="ion-android-remove"></i></a>
                  <div id="faq10" class="collapse" data-parent="#faq-list2">
                    <p>
                      Yes,we do give participation certificate for the registered candidates.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #faq -->

  </main>




  <!--==========================
    Footer
  ============================-->
  <section id="footer">
    <footer class="section-bg">
      <div class="footer-top">
        <div class="container">

          <div class="row">

            <div class="col-lg-6">

              <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <!-- <h3>OJASS</h3> -->
                      <img src="img/date.png" alt="logo" srcset="" width="250px">
                      <br><br>
                    <p>
                      The Annual Techno-Management
                      fest of NIT Jamshedpur.</p>

                  </div>


                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="./">Home</a></li>
                      <li><a href="https://www.nitjsr.ac.in/" target="_blank">NIT Jamshedpur</a></li>

                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      National Institute of Technology,
                      <br>
                      Jamshedpur, Jharkhand<br>

                    </p>
                  </div>

                  <div class="social-links">
                    <a href="https://twitter.com/ojass_nitjsr" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/Ojassnitjamshedpur" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/ojass_techfest" class="instagram"><i class="fa fa-instagram"></i></a>
                    <!-- <i href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
                  </div>

                </div>

              </div>

            </div>

            <div class="col-lg-6">

              <div class="form">
                <!-- action="" method="post" role="form" -->
                <h4>Send us a message</h4>
                <!-- <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique
                  commodi harum aut temporibus.</p> -->

                <form class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                      data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="5" data-rule="required"
                      data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>

                  <div id="sendmessage">Your message has been sent. Thank you!</div>
                  <div id="errormessage"></div>

                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
                
              </div>

            </div>

            <div id="snackbar">Your message has been sent. Thank you!</div>

          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; &nbsp;<a class="webteam" href="./Developers/" target="_blank">OJASS WEBTEAM</a>
        </div>
      </div>
    </footer>
  </section><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery.visible.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/rellax/rellax.min.js"></script>
  <script src="lib/flipclock/flipclock.js"></script>

  <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-database.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
    var rellax = new Rellax('.rellax', {
      speed: -3.2,
      center: false,
      wrapper: null,
      round: true,
      vertical: true,
      horizontal: false
    });
  </script>

  <script type="text/javascript">
    var clock;

    $(document).ready(function () {

      // Grab the current date
      var currentDate = new Date();

      // Set some date in the future. In this case, it's always Jan 1   format(year,month,date)
      var futureDate = new Date(currentDate.getFullYear() + 1,0 , 28);

      // Calculate the difference in seconds between the future and current date
      var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

      // Instantiate a coutdown FlipClock
      clock = $('.clock').FlipClock(diff, {
        clockFace: 'DailyCounter',
        countdown: true
      });
    });
  </script>

</body>

</html>