<?php include('../php/server.php');
  // if user is not logged in, they cannot access this page
  if (empty($_SESSION['username'])) {
    header('location: index.php');
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- viewport -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Components -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/review.css">
    <link rel="stylesheet" href="../css/rating.css">
    <link rel="stylesheet" href="../css/commentsBox.css">
    <script src="../js/review.js"></script>
    <title>SeniorHelp Homepage</title>
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
          <?php if ($_SESSION['username']['userType'] == "serviceProvider"): ?>
              <li><a href="serviceAccept.php"><span class="glyphicon glyphicon-list-alt"></span> Request</a></li>
          <?php endif; ?>
          <?php if ($_SESSION['username']['userType'] == "seniorCitizen"): ?>
              <li><a href="service.php"><span class="glyphicon glyphicon-list-alt"></span> Services</a></li>
          <?php endif; ?>
          <li><a href="manage.php"><span class="glyphicon glyphicon-folder-open"></span> Manage</a></li>
          <li><a href="review1.php"><span class="glyphicon glyphicon-comment"></span> Review</a></li>
        </ul>
        <!-- Login and Sign Up Components -->
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,<?php echo $_SESSION['username']['username']; ?></a></li>
          <?php endif ?>
          <li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class="Text">
      <center><h3>Review</h3></center>
    </div>
    <center>
    <form style="margin-bottom:10px;">
      Request ID:
      <input type="text" name="requestID" value="A0001">
      <button type="button" value="Search" onclick="myFunction()" >Search</button>
    </form>
    </center>

<div id="wrap">
    <table id="reviewTable">
      <tr>
        <th><strong>Name</th>
        <th>Senior/Service Provider</th>
        <th>View Rating</th>
        <th>View Review</th>
    </tr>
      <tr>
        <td>dsadasdsdas</td>
        <td>Senior</td>
        <td><input type="button" class="openSub2" value="CurrentRating"></td>
        <td><input type="button" class="openSub" value="Review"></td>
      </tr>
      <tr>
        <td>cxzcxzc</td>
        <td>Service Provider</td>
        <td><input type="button" class="openSub2" value="CurrentRating"></td>
        <td><input type="button" class="openSub" value="Review"></td>
      </tr>
    </table>
  </div>
  </header>

<!--Pop-up window for review-->
  <div class="modal fade" id="modelWindow" role="dialog">
    <div class="modal-dialog modal-md vertical-align-center">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Service Request</h4>
        </div>
        <div class="modal-body">
          <div class="detailBox">
              <div class="titleBox">
                <label>Comment Box</label>
              </div>
              <div class="actionBox">
                  <ul class="commentList">
                      <li>
                          <div class="commenterImage">
                            <img src="https://openclipart.org/download/247324/abstract-user-flat-1.svg" />
                          </div>
                          <div class="commentText">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                          </div>
                      </li>
                      <li>
                          <div class="commenterImage">
                            <img src="https://openclipart.org/download/247324/abstract-user-flat-1.svg" />
                          </div>
                          <div class="commentText">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                              <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

                          </div>
                      </li>
                      <li>
                          <div class="commenterImage">

                            <img src="https://openclipart.org/download/247324/abstract-user-flat-1.svg" />
                          </div>
                          <div class="commentText">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                              <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="UserComments">
            <form style="margin-top:15px">
            <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="1star" style="cursor:pointer"></span>
            <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="2star" style="cursor:pointer"></span>
            <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="3star" style="cursor:pointer"></span>
            <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="4star" style="cursor:pointer"></span>
            <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(this)" id="5star" style="cursor:pointer"></span>

          </form>
            <textarea rows="5" placeholder="Enter your comments"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="submit-btn" class="btn btn-secondary">Submit</button>
        </div>
      </div>
    </div>
  </div>


  <!--Pop-up window for currentRating-->
    <div class="modal fade" id="modelWindow2" role="dialog">
      <div class="modal-dialog modal-md vertical-align-center">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">User Rating</h4>
          </div>
          <div class="modal-body">
            <center>
            <div id="rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p><h2><strong>4.1</h2></p>
            <p> average based on 254 Ratings.</p>
            <hr style="border:3px solid #f1f1f1">

            <div class="row">
              <div class="side">
                <div>5 star</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-5"></div>
                </div>
              </div>
              <div class="side right">
                <div>150</div>
              </div>
              <div class="side">
                <div>4 star</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-4"></div>
                </div>
              </div>
              <div class="side right">
                <div>63</div>
              </div>
              <div class="side">
                <div>3 star</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-3"></div>
                </div>
              </div>
              <div class="side right">
                <div>15</div>
              </div>
              <div class="side">
                <div>2 star</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-2"></div>
                </div>
              </div>
              <div class="side right">
                <div>6</div>
              </div>
              <div class="side">
                <div>1 star</div>
              </div>
              <div class="middle">
                <div class="bar-container">
                  <div class="bar-1"></div>
                </div>
              </div>
              <div class="side right">
                <div>20</div>
              </div>
            </div>
          </div>
        </center>
        </div>
      </div>
    </div>
  </div>



</body>
</html>
