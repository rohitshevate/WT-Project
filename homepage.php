<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Booking</title>
	<link rel="stylesheet" href="homepagestyle.css">
</head>
<body>
	<header>
        <div class="rel">
        <center>
        <div id="title">
            <h1>MTPL</h1>
            <h2>Digital Cable Era</h2>
            <h3>Welcome To Digital Cable TV</h3>
        </div>

        <div id="setopbox">
            <img src="unnamed.png" alt="home">
        </div>

        <div id="main">
			<ul>
				<li><a href="activation.php">Home Page</a></li>
                </ul>
		</div>

        </center>
    </div>
	</header>
</body>
</html>
