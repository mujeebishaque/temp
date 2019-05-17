<?php include("config.php") ?>
<?php include('links.php'); ?>
<?php echo $header; ?>

<?php
if (isset($_POST["create_user"]))
{
    
     $user_id = $_POST["user_id"];  
     $email = $_POST["email"];  
     $contact = ""; 

     $password = $_POST["password"]; 
    $ERRORS = [];
     $dob = $_POST["dob"]; 
     $Gender = $_POST["Gender"]; 
    if ( empty($user_id) || empty($email) || empty($contact) || empty($password) || empty($dob) )   {
			array_push($ERRORS, "Field is empty");
		}
   
    $sql = "INSERT INTO user (user_id, email, contact, password, dob, gender)
VALUES('$user_id', '$email', '$contact', '$password','$dob','$Gender')";


if (mysqli_query($conn, $sql)) {
     
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>
<?php

if(isset($_POST["login"]))

{
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];
    $ERRORS = [];
    $MESSAGES = [];
    if ( strlen($username) < 6 || strlen($password) < 4 )  {
			array_push($ERRORS, "Length Of Username Or Password in Less.");
		}
		if ( empty($username) || empty($password) )  {
			array_push($ERRORS, "Field is empty");
		}
		if (is_int($username))  {
			array_push($ERRORS, "Name cannot be integer");
		}

    $sql = "SELECT * FROM user WHERE user_id = '$user_id' OR email = '$user_id' OR contact = '$user_id' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    $check=mysqli_fetch_assoc($result);
    if($check['user_id']!='' && $check['password']!='')
    {
        $_SESSION['user_id']=$check['user_id'];
        $_SESSION['password']=$check['password'];
        $_SESSION['id']=$check['id'];

        header('Location:dashboard.php');
    }
    else {
        echo "User name or password incorrect";
    }
    if ( $result )  {
			array_push($MESSAGES, "SUCCESS: Welcome Back !");
		}else  {
			array_push($ERRORS, "ERROR: ");
		}
	} ?>
}
?>
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
	
	<div class="register" id = "login">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				<form action="" method="post" name="login">
				<h3 class="animated shake infinite pad-top better-font" style="color: white; font-size: 34px; animation-duration: 10s;"> Login Here </h3>
				<hr />
				<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Username/Email/Contact Number</label>
					  <div class="col-12">
					    <input class="form-control" type="text" placeholder="Name" name="user_id" id="user_id" required maxlength="50">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">Password</label>
					  <div class="col-12">
					    <input class="form-control" type="password" placeholder="password" name="password" id="password">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="col-12">
						<input type="submit" name="login" value="Login" class="btn btn-lg btn-danger button-kz">
					  </div>
					</div>
				</form>

				</div>
				<div class="col-sm-6">
				<form action="" method="post" name="create_user">
				<h3 class="animated shake infinite pad-top better-font" style="color: white; font-size: 34px; animation-duration: 10s;">Register Yourself Here</h3>
				<hr />
					<div class="form-group row">
					  <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Username</label>
					  <div class="col-12">
					    <input class="form-control" type="text" placeholder="Name" name="user_id" id="user_id" required maxlength="50">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">*Email Address</label>
					  <div class="col-12">
					    <input class="form-control" type="email" placeholder="xyz@gmail.com" name="email" id="email" required>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">Password</label>
					  <div class="col-12">
					    <input class="form-control" type="password" placeholder="password" name="password" id="password">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="example-email-input" class="col-2 col-form-label" style="color: white;">Date Of Birth</label>
					  <div class="col-12">
					    <input class="form-control" type="date" name="dob" required>
					  </div>
					</div>
					<input type = "radio" name = "Gender" id = "Gender" checked = "checked" value = "Male">  <span class="text-white">MALE</span>
            <input type = "radio"  name = "Gender" value = "Female"> <span class="text-white">FEMALE</span> <br> <br> 
					<div class="form-group row">
						<input type="submit" name="create_user" value="Register Yourself" class="btn btn-lg btn-outline-warning button-kz">
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
				&ldquo;We here at SirusCorp want to provide value to<br />
				other people's lives by reducing  
				<strong>their time and effort.</strong><br />
				All you have to do to know things about sports <br /> 
				is to just visit the site regularly &rdquo;</blockquote>
				<small> -- SirusCorp </small><cite class="text-muted"> ( we love you )</cite>
				</div>
			</div>

			<div class="col-sm-4 padtop more-about-me">
				<h4 class="text-center">
					More About Us
				</h4>
				<hr style="box-shadow: 0px 1px 0.5px white;"/>
				<blockquote>&ldquo;We started SirusCorp in 2012 for adding value to others people's lives. We reduced their effort, worries and time 
				by giving them platform where they can search about all the news relevant to their interest. Currently, we provide services for only sports.
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