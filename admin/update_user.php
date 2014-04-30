<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chat Elek Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/datepicker.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Chat Elek Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="home_nav.php">Home</a></li>
            </ul>
			<ul class="nav pull-right">
				<li class="active"><p class="navbar-text pull-right">Welcome, Admin</p></li>
				<li><a href="logout.php" title="Logout">Logout</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <img width="1000" height="500" src="images/chatelek.jpg" class="img-rounded">
      </div>

      <!-- Example row of columns -->
      <div class="hero-unit">
		<h3>Data User</h3>
		<a class="btn btn-large btn-primary" type="submit" href="datauser.php">Back</a><br/><br/>
        <form method="POST" action="prosesupdateuser.php" enctype="multipart/form-data">
		<center>
		<table border="0" cellpadding="5" cellspacing="0">
		<tbody>
		<?php
			include "koneksi.php";
			
			$id = $_GET['id'];
			$tampil = "SELECT * FROM data_user WHERE id_user='$id';";
			$querytampil = mysql_query($tampil);
			$hasil = mysql_fetch_array($querytampil);
			$nama = $hasil['nama'];
			$username = $hasil['username'];
			$pass = $hasil['password'];
		?>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input name="nama" type="text" id="nama_depan" value="<?php echo $nama; ?>" size="30" required="required"/></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input name="username" type="text" value="<?php echo $username; ?>" size="20" required="required"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input name="pass" type="text" value="<?php echo $pass; ?>" id="tempat_lahir" size="20" required="required"/>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<center>
				<button class="btn btn-large btn-primary" type="submit">Submit</button>
				<button class="btn btn-large" type="reset">Reset</button>
				</center>
			</td>
		</tr>
		</tbody>
		</table>
		</center>
		</form>
      </div>

      <hr>

      <footer>
        <p>Copyright &copy; ERA 2014</p>
      </footer>

    </div> <!-- /container -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
