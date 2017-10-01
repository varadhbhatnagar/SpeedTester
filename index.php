<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="regstyle.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	var animate, left=0, imgObj=null;
function init(){
   imgObj = document.getElementById('myImage');
   imgObj.style.position= 'absolute';
   imgObj.style.top = '30px';
   imgObj.style.left = '-30px';
   imgObj.style.visibility='hidden';
   moveRight();
}
function moveRight(){
    left = parseInt(imgObj.style.left, 10);
    if (700 >= left) {
        imgObj.style.left = (left + 10) + 'px';
        imgObj.style.visibility='visible';
        animate = setTimeout(function(){moveRight();},20); // call moveRight in 20msec
        //stopanimate = setTimeout(moveRight,20);
    } else {
        stop();
    }
    //f();
}
function stop(){
   clearTimeout(animate);
}
window.onload = function() {init();};
</script>

<link href='https://fonts.googleapis.com/css?family=Amatica SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
<form method="post" action="index.php">
        <?php include('errors.php'); ?>
    
			<label class = "lop1">Email-ID :</label>
			<input type="text" class = "lop" placeholder=" Username/Email" name="username">
			<label class = "lol1">Password :</label>
			<input type="password" class="lol"  placeholder=" Enter Password" name="password">
			<button type="submit" class="btn" name="login_user">Login</button>
		<label class="lol3" ><a href="www.google.com">Forgot your password</a></label>
        <p id="loly">
			Not yet a member?<br> <a href="register.php">Sign up</a>
		</p>
</form>

    

<style>
      .speedometer {
  width: 200px;
  height: 100px;
  position: absolute;
  border-radius: 200px 200px 0 0;
}
.speedometer:after {
  background-color: #fff;
  width: 20px;
  height: 10px;
  left: 50%;
  margin-left: -10px;
  border-radius: 20px 20px 0 0;
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
}
.speedometer > .pointer {
  position: absolute;
  width: 0;
  height: 0;
  left: 50%;
  bottom: 2px;
  animation: speed-1 5s alternate infinite ease-in-out;
}
.speedometer > .pointer:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  border-style: solid;
  border-width: 90px 0 0 3px;
  border-color: #fff transparent transparent;
  width: 0;
  height: 0;
}
.speedometer.speed-1 {
  background-color: #ed1c24;
    position: absolute;
    margin-left: 75%;
    margin-top: 10%;
}
.speedometer.speed-1 > .pointer {
  animation-name: speed-1;
}
@keyframes speed-1 {
  from {
    -moz-transform: rotate(100deg);
    -ms-transform: rotate(100deg);
    -webkit-transform: rotate(100deg);
    transform: rotate(100deg);
  }
  to {
    -moz-transform: rotate(300deg);
    -ms-transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
    transform: rotate(300deg);
  }
}
body {
    font-family: 'Amatica SC';font-size: 32px; 
  
}
div.fixed {
    position: fixed;
    left: 210px;
    top: 40px;
    width: 150px;
    height: 100px;
}
div.div1 {
   font-family: 'Allan';
  color: #350CBA;
  font-size: 40px;
    position: absolute;
    margin-left: 33%;
    margin-top: -11%;
}
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
    color: black ;
}
section.gradient button {
  color: #fff;
  text-shadow: -2px 2px #346392;
  background-color: #ff9664;
  background-image: linear-gradient(top, #6496c8, #346392);
  box-shadow: inset 0 0 0 1px #27496d;
  border: none;
  border-radius: 15px;
}
section.gradient button:hover,
section.gradient button.hover {
  box-shadow: inset 0 0 0 1px #27496d,0 5px 15px #193047;
}
section.gradient button:active,
section.gradient button.active {
  box-shadow: inset 0 0 0 1px #27496d,inset 0 5px 30px #193047;
}
.speedometer.speed-2 {
  background-color: #f59122;
    position:absolute;
    margin-left: 10%;
    margin-top: 10%;
}
.speedometer.speed-2 > .pointer {
  animation-name: speed-2;
}
@keyframes speed-2 {
  from {
    -moz-transform: rotate(100deg);
    -ms-transform: rotate(100deg);
    -webkit-transform: rotate(100deg);
    transform: rotate(100deg);
  }
  to {
    -moz-transform: rotate(300deg);
    -ms-transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
    transform: rotate(300deg);
  }
}
p.ex1 {
    font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
    font-size: 80% ;
    font-weight: 700;
}
</style>

</head>
<div class="fixed">
<img id="myImage" src="rocket.png" />
</div>


<body background='wormz.png' >
<h1 id= "er">SpeedTester</h1>
</body>
<div>
<br>
</div>
<div id="Res"  style="margin-left: 468px; margin-right:500px;  background-color: white">
</div>

<hr style="margin-top: 8%;">
    
 <div class="speedometer speed-1">
  <div class="pointer"></div>
</div>

<div class="speedometer speed-2">
  <div class="pointer"> </div>
</div>


<br><br><br><br><br>
<div id="div1">
<p class="ex1">Made by Varad Bhatnagar and Nitin Bisht.</p>
    </div>   

<section class="gradient">
<div class="div1" >
What's My Internet Speed Today?
<br>
 <button id="MyMod" class="hover" >Check</button>
</div>
</section>
<br>
<div id="Res"  style="margin-left: 468px; margin-right:500px;  background-color: white">
</div>
<hr style="margin-top: 13%;">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" id="mad">
    <span class="close">&times;</span>
    <div class="header">
		Register
	</div>
    <form class = "re" method="post" action="index.php">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-group">   
                <label>Email</label>
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1" placeholder="Password">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2" placeholder="Re-type Password">
            </div>
            <div class="input-group">
                <button type="submit" class="bn" name="reg_user">Register</button>
                <br> <span id="polk">Already a member? <a href="index.html">Sign in</a></span>
            </div>
            <p>
            
            </p>
        </form>
  </div>
</div>
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!--javascript for madal box i.e REGISTER Window-->
<script type="text/javascript">
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("MyMod");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    window.confirm("You have to register first.")
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}    
</script>     
    
    
</html>
