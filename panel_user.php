<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chat Elek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<script type='text/javascript' src="js/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/ikicss.css" rel="stylesheet">
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
          <a class="brand" href="#">Chat Elek</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="home_nav.php">Home</a></li>
            </ul>
			<ul class="nav pull-right">
				<li class="active"><p class="navbar-text pull-right">Welcome <?php echo $_SESSION['user']; ?></p></li>
				<li><a href="logout.php" title="Logout">Logout</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <img width="800" height="300" src="images/chatelek.jpg" class="img-rounded">
      </div>

      <!-- Example row of columns -->
      <div class="hero-unit">
		<div id='menu'>
			<div style="clear:both"></div>
		</div>
		<div id='wrapper'>
			<div id="online">
				<?php include('user-online.php');?>
			</div>
			<div id="chatbox">
			<?php include('message-line.php');?>
			</div>
			<form name='message' action="">
				<textarea name="message-input" id="message-input" class="input-xxlarge" rows="3"></textarea>
				<button class="btn btn-large btn-primary" name="message-submit" id="message-submit" type="submit">Send</button>
			</form>
		</div>
	  </div>
	  
	  
	  
		<script language='javascript'>
			//membuat document jquery
			$(document).ready(function(){
				//variable yg dibaca dengan ajax untuk di kirim
				$("#message-submit").click(function(){
					var clientmsg = $("#message-input").val();
					$.post("post_message.php", {text: clientmsg});
					$("#message-input").attr("value", "");
					return false;
				});
				//load ajax message
				function loadLog(){
					var oldscrolHeight = $("#chatbox").attr("scrollHeight") - 20;
					$.ajax({
						url : "message-line.php",
						cache : false,
						success : function(html){
							$("#chatbox").html(html); //load ke <div chatbox>
							var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
							if(newscrollHeight > oldscrollHeight){
								$("#chatbox").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
							}
						},
					});
				}
				function loadlog(){
					var oldscrolHeight = $("#online").attr("scrollHeight") - 20;
					$.ajax({
						url : "user-online.php",
						cache : false,
						success : function(html){
							$("#online").html(html); //load ke <div chatbox>
							var newscrollHeight = $("#online").attr("scrollHeight") - 20;
							if(newscrollHeight > oldscrollHeight){
								$("#online").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
							}
						},
					});
				}
				
				setInterval (loadLog, 1000);
				setInterval (loadlog, 1000);
			});
		</script>

		
		
      <hr>

      <footer>
        <p>Copyright &copy; ERA 2014</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
