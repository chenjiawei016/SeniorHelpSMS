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

    <link rel="stylesheet" href="../css/acceptService.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Accept Service</title>

  </head>
  <body>
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
          <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="service.php"><span class="glyphicon glyphicon-list-alt"></span> Services</a></li>
          <li><a href="manage.php"><span class="glyphicon glyphicon-folder-open"></span> Manage</a></li>
          <li><a href="review1.php"><span class="glyphicon glyphicon-comment"></span> Review</a></li>
        </ul>
        <!-- Login and Sign Up Components -->
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,<?php echo $_SESSION['username']; ?></a></li>
          <?php endif ?>
          <li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="Text">
  <center><h3>Accept Service Requests</h3></center>
</div>
<center>
  <table>
    <tr>
      <th>RequestDate</th>
      <th>note</th>
      <th>status</th>
    </tr>
    <tr>
      <td>2018,Oct,20th</td>
      <td>none</td>
      <td>pending</td>
    </tr>
  </table>
</center>




  <center>
    <div class="comments">
	     <textarea  rows="5" cols="50"placeholder="What you want to say?" ></textarea>
     </div>
     <form>
     <ul>
       <li><button type="accept" input="accept" value="accept">Accept</button></li>
       <li><button type="reject" input="reject" value="reject">Reject</button></li>
       <li><button type="back"><a style="color:black; text-decoration:none"; href="accept1.html"> Back </a></button></li>
     </ul>
   </form>
   </center>



  </body>
</html>
