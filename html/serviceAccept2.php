<?php include '../php/server.php';
if (empty($_SESSION['username'])) {
  header('location: index.php');
}
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
        <a class="navbar-brand" href="home.php">SeniorHelp</a>
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
        <th>Date</th>
        <th>Time</th>
        <th>Note</th>
        <th>Status</th>
        <tr>

          <?php
          $con = mysqli_connect('localhost','root','','service');
          if (!$con){
            echo"connection fail";
          }
          $requestid = $_GET['requestID'];
          if (empty($requestid)){
            header('Location:serviceAccept.php');
          } else{
            $query = "SELECT * FROM  servicerequests WHERE requestID= $requestid";
            $result = mysqli_query($con,$query);
            while ($row=mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>".$row['reqDate']."</td>";
              echo "<td>".$row['reqTime']."</td>";
              echo "<td>".$row['notes']."</td>";
              echo "<td>".$row['status']."</td>";
              echo "</tr>";
            }
          }
          ?>
        </table>
      </center>
      <center>
        <form class="comments"  method="post">
          <textarea  name="comment" rows="5" cols="50" placeholder="What you want to say?" ><?php echo $row['comment']?></textarea>
          <ul>
            <li><button type="accept" name="accept" value="accept">Accept</button></li>
            <li><input type="button" value="Back" onclick="window.location='serviceAccept.php';"></li>
          </ul>
          <?php
          $_SESSION['username'];
          if(isset($_REQUEST['accept'])){
            $comment = $_POST['comment'];
            $username1 = $_SESSION['username']['username'];
            $sql="UPDATE servicerequests Set status ='Accepted', notes = '$comment', providerUsername = '$username1'  WHERE requestID = $requestid";

            $result = mysqli_query($con,$sql);
            header("Location:serviceAccept.php");
          }
          $con->close();
          ?>
        </form>
      </center>
    </body>
    </html>
