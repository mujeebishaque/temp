<!DOCTYPE html>
<html>
	
	<?php include('foundation/links.php'); ?>
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

<!-- carousel here -->


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid size" src="images/4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid size" src="images/footer.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid size" src="images/ice.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid size" src="images/what.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid size" src="images/wooden.jpg" alt="Fifth slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- carousel ends here -->
<!-- main panel with links, for users -->
	<div class="main-panel">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="move-left">
					  <div class="list-group">
					  	<!-- List group -->
						<div class="list-group" id="myList" role="tablist">
						  <a class="list-group-item list-group-item-action active" data-toggle="list" href="index.php" role="tab">Home</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash/dash_profile.php" role="tab">Profile</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash/dash_news.php" role="tab">Latest News</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash/dash_events" role="tab">Upcomings Events</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash/dash_cat.php" role="tab">Armed Forces Events</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="dash/dash_settings.php" role="tab">Settings</a>

						</div>
					  </div>
					 </div>
				</div>
				<div class="col-sm-9 offset-sm-1">
					<h2 class="text-center links" style="color: black;">Welcome Back</h2>
					<hr />
					<br />
					<h3>Here is what you need to know : </h3>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item">1 - You can use the list on left to navigate</li>
					  <li class="list-group-item">2 - You can change settings</li>
					  <li class="list-group-item">3 - Add your favorites</li>
					  <li class="list-group-item">4 - Read News about your favourite sports</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</body>

</html>



<?php
	echo $js; 
	include('foundation/default_footer.php');
	echo $default_footer;
?>
