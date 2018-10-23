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
  <center><h3>Service Requests</h3></center>
</div>
<center>
  <table id="second-tb">
    <tr>
      <th>RequestID</th>
      <th>Service Code</th>
      <th>Service Requested</th>
      <th>Date</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>001</td>
      <td>A001</td>
      <td>Cleaning</td>
      <td>2018.Oct.5th</td>
      <td>pending</td>
    </tr>
    <tr>
      <td>002</td>
      <td>A002</td>
      <td>Cleaning</td>
      <td>2018.Oct.23th</td>
      <td>pending</td>
    </tr>
    <tr>
      <td>003</td>
      <td>A003</td>
      <td>Cleaning</td>
      <td>2018.Oct.20th</td>
      <td>pending</td>
    </tr>
    <tr>
      <td>004</td>
      <td>A004</td>
      <td>Cleaning</td>
      <td>2018.Oct.19th</td>
      <td>pending</td>
    </tr>
  </table>
</center>
<form class="textbox">
  <center>
    <label for="code">Request ID:
    <input type="text" name="requestID" id="code">
    </label>
    <button type="submit"><a style="color:black; text-decoration:none" href="accept2.html">Submit</button>
  </center>
</form>
<center>
  <button type="back"><a style="color:black; text-decoration:none"; href="homeProvider.html">Back</button>
</center>
  <br>

  <script type="text/javascript">
    var table = document.getElementById('second-tb');

    for(var i = 1; i < table.rows.length; i++){
      table.rows[i].onclick=function(){
        document.getElementById("code").value = this.cells[0].innerHTML;
      };
    }
  </script>
  </body>
</html>
