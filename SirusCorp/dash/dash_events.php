<!DOCTYPE html>
<html>
	<?php include('links.php'); ?>
	<?php echo $header; ?>

<body>

<nav class="navbar navbar_dark navbar-inverse fixed-top" style="padding: 2px;">
	<div class="container">
		<div class="row">
			<div class="col-9">
				<p class="navbar-brand links"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp; Sportsplus</p>
			</div>
			<div class="col-3 ">
				<a class="navbar-brand links float-right" href="signout.php" style="text-align: right; margin-top: 40px;">Sign Out</a>				
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
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="../index.php" role="tab"><i class="fa fa-home"></i>Home</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash_news.php" role="tab">Latest News</a>
						  <a class="list-group-item list-group-item-action active" data-toggle="list" href="dash_events" role="tab">Upcomings Events</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash_cat.php" role="tab">Armed Forces Events</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="../dashboard.php" role="tab">Dashboard</a>

						</div>
					  </div>
					 </div>
				</div>
				<div class="col-sm-9 offset-sm-1">
					<h2 class="text-center links" style="color: black;">Sports Events</h2>
					<hr />
					<br />
					<table class="table table-bordered table-dark">
					  <thead>
					    <tr>
					      <th scope="col">Upcoming Sports Events</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">
					      	<?php include('primary_function.php'); upcoming_events();?>
					      </th>   
					    </tr>
					  </tbody>
					</table>

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
