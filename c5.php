<?php
session_start();

	$_SESSION["scene4"]=$_POST['scene4'];
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="st5.css">
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>
<body>



<header>
        <h1 class="head">Welcome To the Moral Machine Game of PES - A platform for gathering moral decisions</h1>        </header>






<div class="scenes">
	<h1 class="scenario">Scenario 5</h1>
	<h2 class="ss">Select One option among the two</h2>
</div>

<br>
<form action="c6.php" method="post">





    <div class="holdingcontainer">
      <div class="internalcontainerL"><h1>Case 1</h1><center><img class="dasimages" src="c51.jpg"></center>

      In this case, the self-driving car with sudden brake failure will continue ahead and drive through a pedestrian crossing ahead. This will result in …
<br>
	Dead:
	<ul><li>1 man</li></ul>

<input type="radio" name="scene5" id="radio1" value="1" class="radio" checked/>
<label for="radio1">First Option</label>
<center>

 </div>

      
      <div class="internalcontainerR"><h1>Case 2</h1><center><img class="dasimages" src="c52.jpg"/></center>In this case, the self-driving car with sudden brake failure will swerve and drive through a pedestrian crossing in the other lane. This will result in …
	<br>
	Dead:
	<ul><li>1 woman</li></ul>
	
	<input type="radio" name="scene5" value="2" id="radio2" class="radio"/>
<label for="radio2">Second Option</label> </div>

    </div>


    <button type="submit">Next</button>
        
</form>
  </body>
</html>