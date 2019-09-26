
<!DOCTYPE html>
<html>
	<?php include('links.php'); ?>
	<?php echo $header; ?>
	
<body>

<nav class="navbar navbar_dark navbar-inverse fixed-top" style="padding: 2px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<p class="navbar-brand links"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp; Sportsplus</p>
			</div>
		</div>
	</div>
</nav>
<!-- main panel with links, for users -->
	<div class="main-panel">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="move-left">
					  <div class="list-group">
					  	<!-- List group -->
						<div class="list-group" id="myList" role="tablist">
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="../index.php" role="tab">Home</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash_profile.php" role="tab">Profile</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash_news.php" role="tab">Latest News</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash_events" role="tab">Upcomings Events</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash_cat.php" role="tab">Armed Forces Events</a>
						  <a class="list-group-item list-group-item-action active" data-toggle="list" href="dash_settings.php" role="tab">Settings</a>

						</div>
					  </div>
					 </div>
				</div>
				<div class="col-sm-9 offset-sm-1">
					<h2 class="text-center links" style="color: black;">User Settings</h2>
					<hr />
					<br />
					<p class="text-center">Update Your Account Information</p>

				</div>
			</div>
		</div>
	</div>

</body>

</html>




<?php
	echo $js; 
	include('../foundation/default_footer.php');
	echo $default_footer;
?>
