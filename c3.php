<?php
session_start();

	$_SESSION["scene2"]=$_POST['scene2'];
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="s3.css">
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>
<body>



<header>
        <h1 class="head">Welcome To the Moral Machine Game of PES - A platform for gathering moral decisions</h1>        </header>






<div class="scenes">
	<h1 class="scenario">Scenario 3</h1>
	<h2 class="ss">Select One option among the two</h2>
</div>

<br>
<form action="c4.php" method="post">





    <div class="holdingcontainer">
      <div class="internalcontainerL"><h1>Case 1</h1><center><img class="dasimages" src="c31.jpg"></center>

      In this case, the self-driving car with sudden brake failure will continue ahead and drive through a pedestrian crossing ahead. This will result in …
<br>
	Dead:
	<ul><li>3 criminals</li><li>2 homeless people</li></ul>
<p>Note that the affected pedestrians are abiding by the law by crossing on the green signal.</p>
<input type="radio" name="scene3" id="radio1" value="1" class="radio" checked/>
<label for="radio1">First Option</label>
<center>

 </div>

      
      <div class="internalcontainerR"><h1>Case 2</h1><center><img class="dasimages" src="c32.jpg"/></center>In this case, the self-driving car with sudden brake failure will swerve and drive through a pedestrian crossing in the other lane. This will result in …
	<br>
	Dead:
	<ul><li>3 men</li><li>2 women</li></ul>
	<p>Note that the affected pedestrians are flouting the law by crossing on the red signal.</p>
	<input type="radio" name="scene3" value="2" id="radio2" class="radio"/>
<label for="radio2">Second Option</label> </div>

    </div>


    <button type="submit">Next</button>
        
</form>
  </body>
</html>