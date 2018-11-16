<?php include '../php/server.php';
$con=mysqli_connect('localhost','root','','service');
if(!$con){
  echo"connection fail";
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
  <!--<link rel="stylesheet" href="../css/acceptService.css">-->
  <style media="screen">
  #accept {
    color: black;
    padding: 50px 0 0 0;
    margin: 0 10px;
  }

  .table-head h3 {
    margin: 0;
    padding: 0.5em 0;
    text-align: center;
  }

  #tb-display {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 10px;
    text-align: center;
  }

  #tb-display td, #tb-display th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  #tb-display tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #tb-display tr:not(:first-child):hover {
    background-color: #ddd;
  }

  #tb-display th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
  }

  .form-style-2{
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px Arial, Helvetica, sans-serif;
    border-radius: 5px;
    background-color: #f2f2f2;
    background-position: center;
    margin: 0 auto 10px auto;
  }
  .form-style-2-heading{
    font-weight: bold;
    font-style: italic;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
    font-size: 15px;
    padding-bottom: 3px;
  }

  .form-style-2 .input-field {
    width: 140px;
  }
  .form-style-2 label{
    display: flex;
    margin: 0px 0px 15px 0px;
  }
  .form-style-2 label > span{
    width: 100px;
    font-weight: bold;
    float: left;
    padding-top: 8px;
    padding-right: 5px;
  }
  .form-style-2 span.required{
    color:red;
  }

  .form-style-2 input.input-field{
    color: black;
    box-sizing: border-box;
    border: 1px solid #C2C2C2;
    box-shadow: 1px 1px 4px #EBEBEB;
    border-radius: 3px;
    padding: 8px;
    outline: none;
  }
  .form-style-2 .input-field:focus{
    border: 1px solid #0C0;
  }

  .form-style-2 input[type=submit],
  .form-style-2 input[type=button]{
    border: none;
    padding: 8px 8px 8px 8px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    width: 140px;
  }
  .form-style-2 input[type=submit]:hover,
  .form-style-2 input[type=button]:hover{
    background: #EA7B00;
    color: #fff;
  }

  .form-style-2 input::placeholder{
    color: black;
    opacity: 0.6;
  }
  </style>
  <title>Accept Service</title>
</head>
<body id="accept">
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
  <header>
    <div class="table-head">
      <h3>Service Requests</h3>
    </div>
    <table id="tb-display">
      <tr>
        <th>RequestID</th>
        <th>Service Code</th>
        <th>Service Requested</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
        <tr>
          <?php

          $sql = "SELECT * FROM servicerequests INNER JOIN serviceProvider ON servicerequests.code = serviceProvider.serviceCode AND serviceProvider.providerUsername = '".$_SESSION['username']['username']."' AND status = 'Pending'";
          $result = mysqli_query($con,$sql);
          //connect to database
          if (mysqli_num_rows($result) > 0 ) {
            while($row = mysqli_fetch_array($result)){
              echo"<tr>";
              echo"<td>".$row['requestID']."</td>";
              echo"<td>".$row['code']."</td>";
              echo"<td>".$row['serviceRequested']."</td>";
              echo"<td>".$row['reqDate']."</td>";
              echo"<td>".$row['reqTime']."</td>";
              echo"<td>".$row['status']."</td>";
              echo"</tr>";
            }
          }

          ?>
        </table>
      </header>

      <div class="form-style-2">
        <div class="form-style-2-heading">
          View RequestID
        </div>
        <form action="serviceAccept2.php" method="get">
          <label for="code"><span>RequestID: <span class="required">*</span></span>
            <input style="background-color: white;" type="text" class="input-field" id="code" name="requestID" placeholder="Enter RequestID" readonly/>
          </label>

          <label><span>&nbsp;</span>
            <input type="submit" name="submit" value="View"/>
          </label>
        </form>
      </div>

      <script type="text/javascript">
      var table = document.getElementById('tb-display');

      for(var i = 1; i < table.rows.length; i++){
        table.rows[i].onclick=function(){
          document.getElementById("code").value = this.cells[0].innerHTML;
        };
      }


      </script>
    </body>
    </html>
