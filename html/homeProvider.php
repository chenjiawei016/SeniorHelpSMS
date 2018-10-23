<?php include('../php/server.php');
  // if user is not logged in, they cannot access this page
  if (empty($_SESSION['username'])) {
    header('location: index.php');
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Components -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/logincss.css">
    <title>SeniorHelp Homepage</title>
    <title></title>
  </head>
    <body id="home">
      <!-- Navitgation bar using fixed top and inverse -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Hamburger Component after screen size decreases -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropDown" aria-controls="dropDown"
          aria-expanded="false" aria-label="Toggle navigation"><div class="animated-icon1"><span></span><span></span><span></span></div>
          </button>
          <a class="navbar-brand" href="home.html">SeniorHelp</a>
        </div>
        <!-- Navigation Components -->
        <div class="collapse navbar-collapse" id="dropDown">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="accept1.html"><span class="glyphicon glyphicon-list-alt"></span> Request</a></li>
            <li><a href="manage.html"><span class="glyphicon glyphicon-folder-open"></span> Manage</a></li>
            <li><a href="review1.html"><span class="glyphicon glyphicon-comment"></span> Review</a></li>
          </ul>
          <!-- Login and Sign Up Components -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome, User</a></li>
            <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header Showcase -->
    <header>
      <div id="showcase" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
          <h1>Welcome to SeniorHelp Service Matching System</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad m</p>
            <a href="section-b" class="btn">Read More</a>
          </div>
        </div>
    </header>
    <!-- Main Area -->
    <main id="main">
      <!-- Section A -->
      <section id="section-a" class="grid">
        <div class="content-wrap">
          <h2 class="content-title">Web & Application Development</h2>
          <div class="content-text">
            <p>dwopadkopakopdkwaop dkwpoadkwpoakdopwa dkpwadkowapdwakop
              dkwoapdkopwakdpowa dkop wakdopawkdopkwaopdkwapd dkopwadkopwakdwa
              dkwoapdkwapokdpwakopdakwpodwa dkwapodkwpoakdowpa</p>
            </div>
        </div>
      </section>

      <!-- Section B -->
      <section id="section-b" class="grid">
        <div class="sides">
        <ul>
          <li>
            <div class="card">
              <img src="../images/city1.jpg" alt="">
              <div class="card-content">
                <h3 class="card-title">Web Development</h3>
                <p>djioajdoiwajdiowa djwaiodjowaijdoiwa jdoiwajdoiwajo
                djiowadjowaijdoiwajdoiwa djowiajdoiwajdoiawj
                djwaiodjwoaijdoiwajdada dowa</p>
              </div>
            </div>
          </li>

          <li>
            <div class="card">
              <img src="../images/city2.jpg" alt="">
              <div class="card-content">
                <h3 class="card-title">Mobile Development</h3>
                <p>djioajdoiwajdiowa djwaiodjowaijdoiwa jdoiwajdoiwajo
                djiowadjowaijdoiwajdoiwa djowiajdoiwajdoiawj
                djwaiodjwoaijdoiwajdowa</p>
              </div>
            </div>
          </li>

          <li>
            <div class="card">
              <img src="../images/city3.jpg" alt="">
              <div class="card-content">
                <h3 class="card-title">Tech Development</h3>
                <p>djioajdoiwajdiowa djwaiodjowaijdoiwa jdoiwajdoiwajo
                djiowadjowaijdoiwajdoiwa djowiajdoiwajdoiawj
                djwaiodjwoaijdoiwajdowa</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      </section>
      <!-- Section C -->
      <section id="section-c" class="grid">
        <div class="content-wrap">
          <h2 class="content-title"> We handle all of your digital needs</h2>
          <p>djwaiodjwoai djiwoajdoiwajd jdoiwajdoiwajoid djiowajd oiwjadoijwadoi
          djiowajdoiwajdoiajdoiwajdoiwajodiwajoidjwoai djwoiajdwajdoiawjdoiawjoi</p>
        </div>
      </section>
      <!-- Section D -->
      <section id="section-d" class="grid">
        <div class="box">
          <h2 class="content-title">Contact Us</h2>
          <p>jdoiwadjoiwa jdiowajdoiwajdoiwa djiwoajdoiwajdoiwa jdoiwjaoidjwaoijdoiaw
          jdiowadjwaoijdoiwajdoiwajodijwao jdiowajdoijwaoidjwaoidjowajdjwioajo</p>
          <p>contatct@something.test</p>
        </div>

        <div class="box">
          <h2 class="content-title">About Our Company</h2>
          <p>djwaiodjwoia jdiowajdoiwajiod jdiowajdoiwajdoijwa iodjoiwaj djwaiodjwoaijdoiwajdowadjiowajdowja
          jdiowajdoiwajdoiwaj iodjwaoidjowaijdoiwja ojdiowajdoiwajiodjwaoijdoiwaj</p>
        </div>
      </section>
    </main>
    <!-- Footer -->
    <footer id="main-footer" class="grid">
      <div>Acme Web Solutions</div>
      <div>
        Project By Traversy Media
      </div>
    </footer>
  </body>
</html>
