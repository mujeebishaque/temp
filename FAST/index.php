<!doctype html>
<html>
	<?php include('foundation/links.php'); ?>
	<?php echo $header; ?>

	
<script src="js/jquery-3.1.1.min.js"></script>

<script>
	$(document).ready(function(e) {
		$("body").addClass("animated fadeIn");
		$("body").css('animation-duration', '3s');
	});
</script>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- navigation bar -->

	<nav class="navbar1 navbar navbar-toggleable-md navbar-inverse fixed-top">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <img src="images/new-final.png" width="85" height="80" class="d-inline-block" alt="">
	   <a class="navbar-brand" href="index.php"><span class="better-font text-center">Sportsplus &nbsp;</span></a>  
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link links" href="index.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link links" href="submit_research.php"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Latest Sports News</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link links" href="#login"><i class="fa fa-terminal"></i>&nbsp;&nbsp;Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link links" href="getintouch.php"><i class="fa fa-phone"></i>&nbsp;&nbsp;Get in Touch</a>
	      </li>
	    </ul>
	  </div>
	</nav>

<!-- intro panel as the name suggests -->
	
	<div class="intro-panel">	
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<div class="transparent-div">
						<p class="text-center intro-text">Sportsplus &raquo Your reliable source for sports news and events</p>
					</div>
				</div>
				<div class="col-2"></div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-12">
					<center>
						<a href="getintouch.php"><button type="button" class="btn btn-primary button-kz">Need Help?</button></a>
					</center>
				</div>
			</div>
		</div>
	</div>

<!-- Register -->
	
	<div class="register" id="login">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				<form id="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" name="login">
				<h3 class="animated shake infinite pad-top better-font" style="color: white; font-size: 34px; animation-duration: 10s;"> Login Here </h3>
				<hr />
				<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Username</label>
					  <div class="col-12">
					    <input class="form-control" type="text" placeholder="Name" name="username" id="example-text-input" required maxlength="50">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">Password</label>
					  <div class="col-12">
					    <input class="form-control" type="password" placeholder="password" name="password" required>
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-12">
						<input type="submit" name="submit" value="Login" class="btn btn-lg btn-danger button-kz">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-12">
						<div class="alert alert-success" role="alert">
  							<?php if ( count($ERRORS) > 0 )  {
  								foreach ($ERRORS as $e)  {
  									echo $e . "<br />";
  								}
  							} ?>
						</div>
					  </div>
					</div>
				</form>

				</div>
				<div class="col-sm-6">
				<form id="form" method="POST" action="" name="create_user">
				<h3 class="animated shake infinite pad-top better-font" style="color: white; font-size: 34px; animation-duration: 10s;">Register Yourself Here</h3>
				<hr />
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Username</label>
					  <div class="col-12">
					    <input class="form-control" type="text" placeholder="Name" name="username" id="example-text-input" required maxlength="50">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">*Email Address</label>
					  <div class="col-12">
					    <input class="form-control" type="email" placeholder="xyz@gmail.com" name="email" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">Password</label>
					  <div class="col-12">
					    <input class="form-control" type="email" placeholder="password" name="email" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">Date Of Birth</label>
					  <div class="col-12">
					    <input class="form-control" type="date" placeholder="xyz@gmail.com" name="email" required>
					  </div>
					</div>
					<div class="form-group row">
						<input type="submit" name="submit" value="Register Yourself" class="btn btn-lg btn-danger button-kz">
					  </div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>

<!-- footer -->


<div class="about-me">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-12">
			<p class="text-center sub-heading">About Us</p>
			<hr style="box-shadow: 0px 1px 1px white;"/>
			</div>

		</div>

		<div class="row margin-left">
			<div class="col-sm-3">		
				<h3 class="text-center one_title">Social Media Links</h3>
				<hr  style="box-shadow: 0px 1px 0.5px white;"/>
						<header class="title"> &raquo; &nbsp; &nbsp;SirusCorp</header>
						<hr  style="box-shadow: 0px 1px 0.5px white;"/>
						<dl class="links">
							<dt><li><a href="https://www.facebook.com/conner.conner.520"><i class="fa fa-facebook-square height padbot"></i>&nbsp; Facebook</a></li></dt>
							<dt><li><a href="#"><i class="fa fa-twitter-square height padbot"></i>&nbsp; twitter</a></li></dt>
							<dt><li><a href="https://github.com/Kinga-m"><i class="fa fa-github height padbot"></i>&nbsp; Github</a></li></dt>
						</dl>
			</div>
			<div class="col-sm-5">			
				<div class="text-center text-success text-size">
				<blockquote>
				<br /><br />
				&ldquo;I believe that not only Programmers are artists <br />
				but they are the individuals that are 
				<strong>extremely creative.</strong><br />
				you can say that coding is poetry but <br /> 
				if you miss a semi-colon ..... &rdquo;</blockquote>
				<small> -- Mujeeb Ishaq </small><cite class="text-muted"> ( i write code )</cite>
				</div>
			</div>

			<div class="col-sm-4 padtop more-about-me">
				<h4 class="text-center">
					More About Us
				</h4>
				<hr style="box-shadow: 0px 1px 0.5px white;"/>
				<blockquote>&ldquo;
				I started programming in my first semester as a hobby.
				I loved C++ and JS. I took a course on Website development where i learned	
				some fundamentals of website designing and development. It was a beginner's course.
				After that i taught myself many languages, new frameworks like laravel and Bootstrap and Now I've been developing websites for 2 years.
				&rdquo;</blockquote>

			</div>
		</div>
	</div>

<!-- all rights reserved thing still to be here -->

<hr style="color: white; border-color: white; height: 5px;">

<div class="container">
	<div class="row">
		
		<div class="col-sm-6 left-text">
		<p class="pull-left">All rights reserved @ 2018</p>
		</div>

		<div class="col-sm-6 right-text">
		 <p class="pull-right">&raquo; &nbsp;&nbsp;Developed By SirusCorp At SOFTEC'18</p>
		 </div>

	</div>

</div>
<!-- primary footer div closes here -->
</div>
<?php echo $js; ?>
<script type="text/javascript">
</script>
</body>
</html>