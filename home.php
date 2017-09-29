<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="stylese.css">
    <link href='https://fonts.googleapis.com/css?family=Amatica SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    
	<!--<link rel="stylesheet" type="text/css" href="stylese.css">-->
</head>
<body background='wormz.png'>
		<h2 style="color : blue; position:absolute;margin-left:40%;margin-top:5%; font-size:400%;font-family: 'Amatica SC'; font-weight:900;color:#E75A18;"></h2>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p style="color : blue; position:absolute;margin-left:40%;margin-top:5%; font-size:250%;font-family: 'Amatica SC'; font-weight:600;color:#E75A19;">Welcome <strong><u><?php echo $_SESSION['username']; ?></strong></u></p>
			<p> <a href="index.php?logout='1'" style="color : blue; position:absolute;margin-left:90%;margin-top:8%; font-size:140%;font-family: Gill Sans Extrabold, sans-serif; font-weight:600;color:red;">Logout</a> </p>
		<?php endif ?>
	</div>

</body>
    
<div class="dv1" style="color : blue; position:absolute;margin-left:35%;margin-top:10%; font-size:200%;font-family: 'Allan';
  color: #350CBA; font-weight:600;">
What's My Internet Speed Today?
<br>
</div>
 <button class="hover" style="position:absolute; margin-left:43%;margin-top:14%;height:8%;width:8%;box-shadow: inset 0 0 0 1px #27496d,0 5px 15px #193047;color:#8F2C17;font-weight:900;">Click here</button>
    
 <script src="free.js" type="text/javascript">
</script>
    <style>
    #Res {
        color:red;
        position: absolute;
        margin-left: 34%;
        margin-top: 20%;
        height: 30%;
        width: 28%;
        font-family: Times, Times New Roman, Georgia, serif;
        align-content: center;
        align-items: center;
        font-size: 130%;
        }
    </style>
<span id="Res">
</span>
    
</html>

