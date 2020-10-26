<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MTPL</title>
    <link rel="stylesheet" href="cssproject.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="head">
        <div style="float:left ;color:yellow ; font-weight: bold;">M</div>
        <div style="float:left ;color:blue ; font-weight: bold;">T</div>
        <div style="float:left ;color:red ; font-weight: bold;">P</div>
        <div style="float:left ;color:pink ; font-weight: bold;">L</div>
        <div class="user" style="float: right; font-size: 30px; color:white; margin-right: 30px;"><i class="fas fa-user-circle"></i></div>
    </div>>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-bars" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>MTPL</header>
        <ul>
            <li><a href="project.php" class="active"><i class="fas fa-search"></i>Search</a></li>
            <li><a href="activation.php"><i class="fas fa-calendar-week"></i>Activation</a></li>
            <li>
               <a href="order.php" class="Obtn"><i class="fas fa-cart-arrow-down"></i>Order
               <span id="span" class="fas fa-caret-down first"></span>
               </a>
               <ul class="Odbtn">
                   <li><a href="order.php">Change Order</a></li>
               </ul>
            </li>
            <li><a href="Modify.php"><i class="fas fa-edit"></i>Modify</a></li>
            <li><a href="#"><i class="fas fa-redo"></i>Renew</a></li>
            <li><a href="#"><i class="fas fa-pause"></i>Suspend</a></li>
            <li><a href="#"><i class="fas fa-male"></i>E-Support</a></li>
            <li><a href="logout.php"><i class="fas fa-power-off"></i>Logout</a></li>
        </ul>
    </div>
    <section>
        <div id="search">
            <header>
                <h2>Search</h2>
            </header>
            <div class="search">
                <input type="text" placeholder="STB SERIAL #">&nbsp &nbsp &nbsp
                <button type="button" id="sear">Search</button>&nbsp
                <button type="button" id="canc">Cancel</button>
            </div>
        </div>
    </section>
    <script src="Jscript.js"></script>
</body>
</html>
