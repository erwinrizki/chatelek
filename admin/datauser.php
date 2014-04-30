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
		<a class="btn btn-large btn-primary" type="submit" href="panel_admin.php">Back</a>
		<br/><br/>
		<table class="table table-hover">
			<tr>
				<td><b>No</b></td>
				<td><b>Nama Lengkap</b></td>
				<td><b>Username</b></td>
				<td><b>Password</b></td>
				<td><b>Aksi</b></td>
			</tr>
			<?php
				include "koneksi.php";
				
				$no = 1;
				$tampil = "SELECT * FROM data_user";
				$querytampil = mysql_query($tampil);
				while($hasil = mysql_fetch_array($querytampil)) {
					$id = $hasil['id_user'];
					$nama = $hasil['nama'];
					$username = $hasil['username'];
					$pass = $hasil['password'];
			?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $nama; ?></td>
						<td><?php echo $username; ?></td>
						<td><?php echo $pass; ?></td>
						<td>
							<a href="detail_user.php?id=<?php echo $id; ?>" title="Detail"><img src="images/detail.png" width="30" height="30" /></a>
							<a href="update_user.php?id=<?php echo $id; ?>" title="Update"><img src="images/update.png" width="30" height="30" /></a>
							<a href="hapus_user.php?id=<?php echo $id; ?>" title="Delete" onclick="return confirm('Anda Yakin Ingin Menghapus?');"><img src="images/delete.png" width="30" height="30" /></a>
						</td>
					</tr>
			<?php
					$no++;
				}
			?>
		</table>
	  </div>

      <hr>

      <footer>
        <p>Copyright &copy; ERA 2014</p>
      </footer>

    </div> <!-- /container -->

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
