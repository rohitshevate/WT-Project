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
    <link rel="stylesheet" href="cproj.css">
    <link rel="stylesheet" href="activatecss.css">
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
            <li><a href="project.php"><i class="fas fa-search"></i>Search</a></li>
            <li><a href="activation.php" class="active"><i class="fas fa-calendar-week"></i>Activation</a></li>
            <li>
               <a href="order.php" class="Obtn"><i class="fas fa-cart-arrow-down"></i>Order
               <span id="span" class="fas fa-caret-down first"></span>
               </a>
               <ul class="Odbtn">
                   <li><a href="order.php" class="active">Change Order</a></li>
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
        <div id="Activation">
            <header>
                <h2>Activation</h2>
            </header>
            <div class="Activation">
                <input type="text" placeholder="STB SERIAL #">&nbsp &nbsp &nbsp
                <button type="button" id="activate">Validate</button>
           </div>
        </div>
        <div id="details" style="display:none">
            <header> 
                <h2>Activation</h2>
            </header>
          <div id="Modif" >
            <center><h3>Details</h3></center>
            <div id="detl">
             <form id="form">
                <br><br>
                <label for="stb">STB NO. :</label>&nbsp &nbsp &nbsp &nbsp
               <input type="number" name="stb"><br><br><br><br>

               <label for="name">Name &nbsp &nbsp : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="text" name="fname" ><br><br><br><br>

               <label for="mnum">Mobile NO.    : </label>&nbsp 
               <input type="text" name="mnum" ><br><br><br><br>

               <label for="email">Email : </label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               <input type="Email" name="email"><br><br><br><br>

               <label for="address">Address : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="textarea" name="address"><br><br><br><br>

               <label for="pcode">Pincode : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="text" name="pcode"><br><br><br><br>

               <label for="adproof">Address Proof : </label>
               <select name="adproof" >
                  <option>Select type</option>
                  <option value="Aadhar Card">Aadhar Card</option>
                  <option value="Pan Card">Pan Card</option>
                  <option value="Driving Licence">Driving Licence</option>
                  <option value="Ration Card">Ration Card</option>
               </select><br><br><br><br>

               <label for="adno">Aadhar No. : </label>&nbsp &nbsp 
               <input type="text" name="adno"><br><br><br><br>

               <label for="uadproof">Upload Address Proof : </label>&nbsp &nbsp &nbsp 
               <input type="file" name="uadproof"><br><br><br><br>
               
               <center>
                  <button type="button" id="change">Submit</button>
                   <button type="button" id="clear">Clear</button>
                   <br><br><br>
               </center>
            </form>
            </div>
          </div>
        </div>
        <br><br><br>
    </section>
    <script src="Jscript.js"></script>
    <script>
        document.getElementById("activate").addEventListener("click",function()
    {
        document.getElementById("Activation").style.display="none";
        document.getElementById("details").style.display="block";
    });

    </script>
</body>
</html>
