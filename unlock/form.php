<?php 
    include 'includes/db.php';
    require_once "register.php";
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="container">

		<form method="POST" action="" class="form-control">
			<h2>Register Here</h2>
			<label>
				<input type="text" name="fullname" placeholder="Full Name" size="30" required="required">
				<span class="error"> <?php echo $error;?></span>
			</label>
			<br><br>
			<label>
				<input type="text" name="address" placeholder="Address" size="30" required="required">
				<span class="error"> <?php echo $addErr;?></span>
			</label>
			<br><br>
			<label>
				<input type="email" name="email" placeholder="Your email here" size="30" required="required">
				<span class="error"> <?php echo $mailErr;?></span>
			</label>
			<br><br>
			<label>
				<input type="password" name="password" placeholder="Type your password" size="30" >
				<span class="error"> <?php echo $passErr;?></span>
			</label>
			<br><br>
			<label>
				<input type="password" name="confpassword" placeholder="Retype your password" size="30" >
				<span class="error"> <?php echo $confPassErr;?></span>
			</label>
			<br><br>
			<label>
				<input type="checkbox" name="checkbox" value="remeber"><span>
					Remember me
				</span>
			</label>
			<br><br>
			<label>
				<input type="submit" name="register" value="Register">
				<span>Already registered?<a href=""> SignIn here.</a>
				</span>
			</label>
			<br>
		</form>	
	</div>
    <?php
    echo $error;
    ob_end_flush();
    ?>
</body>
</html>