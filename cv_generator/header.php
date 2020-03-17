<!DOCTYPE html>
<html>
<head>
	<title>Pk cv maker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="orange">
	<div class="header" align="">
		<img src="images/pk.jpeg" style="width: 130px;height: 40px;float: left;">
		<img src="images/pk.jpeg" style="width: 130px;height: 40px;float: right;">
		<h1 align='center'>WELCOME TO PK CV MAKER</h1>
	</div>
	<div class="buttons">
		<a href="index.php"><button>Home</button></a>
		<a href="about.php"><button>about</button></a>
		<a href="contact.php"><button>contact</button></a>
		<a href="personal.php"><button>Create CV</button></a>
		<?php
		session_start();
		if($_SESSION['uname'])
		{
		?>
			<p style="float: right;"><?php echo $_SESSION['uname']; ?></p>
			<a href="logout.php" style="float: right;"><button>Logout</button></a>
			<a href="templates.php"><button>Show cv</button></a>
			<a href="update.php"><button>Update cv</button></a>
		<?php
		}
		else
		{
			?>
			<a href="signup.php" style="float: right;"><button>Sign Up</button></a>
			<a href="signin.php" style="float: right;"><button>Sign In</button></a>
			<?php
		}
		?>
	</div>
