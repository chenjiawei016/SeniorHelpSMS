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
    <link rel="stylesheet" href="../css/logincss.css">

    <title>Request Services</title>
  </head>
  <body id="service">
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
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,<?php echo $_SESSION['username']['username']; ?></a></li>
          <?php endif ?>
          <li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Table Section -->
  <header>
    <div class="table-head">
      <h1> Request Services </h1>
    </div>
      <table id="tb-display">
        <tr>
          <th>Service Code</th>
          <th>Service Type</th>
          <th>Description</th>
        </tr>

        <tr>
          <td>A4531</td>
          <td>Cleaning</td>
          <td>djkwpajfpokodkpoawkdpoaw</td>
        </tr>

        <tr>
          <td>A4532</td>
          <td>Cooking</td>
          <td>djkwpajfpokodkpoawkdpoaw</td>
        </tr>

        <tr>
          <td>A4533</td>
          <td>Driving</td>
          <td>djkwpajfpokodkpoawkdpoaw</td>
        </tr>

        <tr>
          <td>A4534</td>
          <td>Shopping</td>
          <td>djkwpajfpokodkpoawkdpoaw</td>
        </tr>

        <tr>
          <td>A4535</td>
          <td>Playing</td>
          <td>djkwpajfpokodkpoawkdpoaw</td>
        </tr>
      </table>
  </header>

  <div class="form-style-2">
    <div class="form-style-2-heading">
      Service Request Form
    </div>
    <form action="" method="post">
      <label for="code"><span>Service Code <span class="required">*</span></span>
        <input type="text" class="input-field" id="code" name="code" value="" placeholder="Enter Service Code" />
      </label>

      <label for="reqDate"><span>Date <span class="required">*</span></span>
        <input type="date" class="input-field-2" id="date" name="reqDate" value="" />
      </label>

      <label for="reqTime"><span>Time <span class="required">*</span></span>
        <input type="time" class="input-field-2" id="time" name="reqTime" min="09:00" max="18:00" value="" />
      </label>

      <label for="notes"><span>Notes <span class="required">*</span></span>
        <textarea name="notes" class="textarea-field" placeholder="Enter Additional Notes..."></textarea>
      </label>

      <label><span>&nbsp;</span>
        <input type="button" class="openSub" value="Submit" />
      </label>
    </form>
  </div>

  <div class="modal fade" id="modelWindowSub" role="dialog">
    <div class="modal-dialog modal-sm, vertical-align-center">
      <div class="modal-content animate">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Service Request Receipt</h4>
        </div>
        <div class="modal-body">
          <label for="displayDate">RequestID
            <input type="text" name="input-field" value="R001" readonly>
          </label>

          <label for="updateStatus">Status:
            <input type="text" name="input-field" value="pending" readonly>
          </label>

          <label for="updateStatus">Service Code:
            <input type="text" name="input-field" value="A4531" readonly>
          </label>

          <label for="displayDate">Required Date:
            <input type="text" name="input-field" value="10/10/2018" readonly>
          </label>

          <label for="updateNotes">Notes:
            <textarea class="textarea-field" name="updateNotes" rows="4" cols="50" readonly> Bring extra money </textarea>
          </label>
        </div>
        <div class="modal-footer">
          <button type="button" id="danger-btn" data-dismiss="modal" class="btn btn-sm">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Js for sending input form table to text fields -->
  <script type="text/javascript">
    var table = document.getElementById('tb-display');

    for(var i = 1; i < table.rows.length; i++){
      table.rows[i].onclick=function(){
        document.getElementById("code").value = this.cells[0].innerHTML;
      };
    }

    // validation for date to be able to pick after today's date
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("reqDate")[0].setAttribute('min', today);

    // opens the modal when update button is clicked
    $(document).on('click', '.openSub', function () {
      $('#modelWindowSub').modal('show');
    });

    $(document).on('click', '.openSub', function () {
      $('#modelWindowSub').modal('show');
    });

    function setModalMaxHeight(element) {
      this.$element     = $(element);
      this.$content     = this.$element.find('.modal-content');
      var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
      var dialogMargin  = $(window).width() < 768 ? 20 : 60;
      var contentHeight = $(window).height() - (dialogMargin + borderWidth);
      var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
      var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
      var maxHeight     = contentHeight - (headerHeight + footerHeight);

      this.$content.css({
        'overflow': 'hidden'
      });

      this.$element
      .find('.modal-body').css({
        'max-height': maxHeight,
        'overflow-y': 'auto'
      });
    }

    $('.modal').on('show.bs.modal', function() {
      $(this).show();
      setModalMaxHeight(this);
    });

    $(window).resize(function() {
      if ($('.modal.in').length != 0) {
        setModalMaxHeight($('.modal.in'));
      }
    });
  </script>
</body>
</html>
