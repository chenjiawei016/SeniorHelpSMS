<?php include '../php/server.php';
$con=mysqli_connect('localhost','root','','service');
if(!$con){
  echo"connection fail";
}
//get data from database
$sql = "SELECT * FROM servicerequests INNER JOIN serviceProvider ON servicerequests.code = serviceProvider.serviceCode AND serviceProvider.providerUsername = '".$_SESSION['username']['username']."' AND status = 'Pending'";

$result=mysqli_query($con,$sql);
?>
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
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Hamburger Component after screen size decreases -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropDown">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">SeniorHelp</a>
      </div>
      <!-- Navigation Components -->
      <div class="collapse navbar-collapse" id="dropDown">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="homeProvider.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="serviceAccept.php"><span class="glyphicon glyphicon-list-alt"></span> Request</a></li>
          <li><a href="manage.php"><span class="glyphicon glyphicon-folder-open"></span> Manage</a></li>
          <li><a href="review1.php"><span class="glyphicon glyphicon-comment"></span> Review</a></li>
        </ul>
        <!-- Login and Sign Up Components -->
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,<?php echo $_SESSION['username']['username']; ?></a></li>
          <?php endif ?>
          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
    <tr>
      <?php

      //connect to database
      if (mysqli_num_rows($result) > 0 ) {

          while($row = mysqli_fetch_array($result) ){
          echo"<tr>";
          echo"<td>".$row['requestID']."</td>";
          echo"<td>".$row['code']."</td>";
          echo"<td>".$row['serviceRequested']."</td>";
          echo"<td>".$row['date']."</td>";
          echo"<td>".$row['status']."</td>";
          echo"</tr>";
        }
      }

      ?>
  </table>
</center>

<form class="textbox" action="serviceAccept2.php" method="get">
  <center>
    <label for="code">Request ID:
    <input type="text" name="requestID" id="code">
    </label>
    <input type="submit" value="View" name="submit">
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
