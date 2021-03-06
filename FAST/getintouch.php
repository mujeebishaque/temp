<!DOCTYPE html>
<html>
	<?php include 'foundation/links.php'; ?>
	<?php echo $header; ?>

	<?php include 'foundation/default_header.php';?>
	<?php include 'foundation/default_footer.php'; ?>

	<script src="js/jquery-3.1.1.min.js"></script>

	<script>
		$(document).ready(function(e) {
			$("body").addClass("animated bounceInDown");
			$("body").css('animation-duration', '2s');
		});
	</script>

<body>
	<nav class="navbar1 navbar navbar-toggleable-md navbar-inverse fixed-top">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <img src="images/new-final.png" width="85" height="80" class="d-inline-block" alt="">
	   <a class="navbar-brand" href="index.php"><span class="better-font text-center">Sportsplus &nbsp;</span></a>  
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link links" href="index.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link links" href="submit_research.php"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Latest Sports News</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link links" href="index.php#login"><i class="fa fa-terminal"></i>&nbsp;&nbsp;Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link links active" href="getintouch.php"><i class="fa fa-phone"></i>&nbsp;&nbsp;Get in Touch</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<br /><br /><br /><br /><br />
	<div class="message">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="text-center text-uppercase links" style="color: black; font-weight: 600;">
						<i class="fa fa-envelope-o"></i>&nbsp;&nbsp;Send Us A Message  &nbsp;&nbsp;|&nbsp;&nbsp;  Get In Touch</p>
					<hr />	
					<form>
					  <div class="form-group">
					    <label for="exampleFormControlInput1"><strong>Your Email Address : </strong></label>
					    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlInput1"><strong>Subject : </strong></label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Subject Here">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1" class="bold"><strong>Email : </strong></label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
					  </div>
					  <div class="form-group">
					  <span class="fa fa-send-o">
					  	<input type="submit" name="submit" value="Send" 
					  	class="btn btn-primary btn-md"
					  	style="cursor: pointer;">
					  </span>
					  </div>
					</form>
				</div>	
			</div>
		</div>
	</div>
	<?php echo $default_footer; ?>

<!-- include JS -->
	<?php echo $js; ?>
</body>
</html>