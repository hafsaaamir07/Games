<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-color: #E8DED1;
		}
		h1{
			color: #4F583D;
			text-align: center;
		}

		.result{
			width: 300px;
			border: 5px solid purple;
			margin: auto;
			margin-top: 0%;
		}
		#name{
			font-size: 30px;
			color: #862A04;
			text-align: center;
			font-family: monospace;
		}
		#pic{
			margin: 15px;
		}
		#button{
			margin-bottom: 20px; 
			text-align: center;
		}
		#link{
			text-align: center;
			font-family: monospace;
			font-size: 20px;
		}
		

	</style>
</head>
<body>
	<h1> Which Simpson Character Am I?</h1>
	<hr>

</body>
</html>




<?php

//variables for each of the characters
	$homer = 0;
	$marge = 0;
	$bart = 0;
	$lisa = 0;
	$total = 0;

	//variables for each of the questions 

	$job = $_POST ['job'];
	$food = $_POST ['food'];
	$hobby = $_POST ['hobby'];
	$fear = $_POST ['fear'];
	$default = "default";
	$character ="";

	$path = getcwd().'/data/';


	//if they dont fill out one of the questions direct them back to the paage
	if ($job == $default || $food == $default || $hobby == $default || $fear == $default){
		header('Location:index.php?question=empty');
		exit();
	}

	//check which character corresponds to the value picked

	if ($job == "homer"){
		$homer ++;
	}
	else if ($job == "marge"){
		$marge++;
	}
	else if ($job == "bart"){
		$bart++;
	}
	else{
		$lisa++;
	};

//*******************

	if ($food == "homer"){
		$homer++;
	}
	else if ($food == "marge"){
		$marge++;
	}
	else if ($food == "bart"){
		$bart++;
	}
	else{
		$lisa++;
	}
//*******************

	if ($hobby == "homer"){
		$homer++;
	}
	else if ($hobby == "marge"){
		$marge++;
	}
	else if ($hobby == "bart"){
		$bart++;
	}
	else{
		$lisa++;
	}
//*******************

	if ($fear == "homer"){
		$homer++;
	}
	else if ($fear == "marge"){
		$marge++;
	}
	else if ($fear == "bart"){
		$bart++;
	}
	else{
		$lisa++;
	}

///***************

 if ($homer > $marge && $homer > $bart && $homer > $lisa){
 	$character = "Homer";
 	setcookie('character',$character);
 	$img = "images/Homer.png";
 	file_put_contents($path."/answers.txt","Homer\n", FILE_APPEND);
 }
 else if ($marge > $homer && $marge > $bart && $marge > $lisa){
 	$character = "Marge";
 	setcookie('character',$character);
 	$img = "images/Marge.png";
 	file_put_contents($path."/answers.txt","Marge\n", FILE_APPEND);

 }
 else if ($bart > $homer && $bart > $marge && $bart > $lisa){
 	$character = "Bart";
 	setcookie('character',$character);
 	$img = "images/Bart.png";
 	file_put_contents($path."/answers.txt","Bart\n", FILE_APPEND);

 }
  else if ($lisa > $homer && $lisa > $bart && $lisa > $marge){
  	$character = "Lisa";
 	setcookie('character',$character);
 	$img = "images/lisa.png";
 	file_put_contents($path."/answers.txt","Lisa\n", FILE_APPEND);
 }
 else{
 	$character ="Homer";
 	setcookie('character',$character);
 	$img = "images/Homer.png";
 	file_put_contents($path."/answers.txt","Homer\n", FILE_APPEND);	
 }


print "<div class = 'result'><div id ='name'> You are $character <div id ='pic'><img src=\"$img\"></div><form action='clearcookies.php' method='GET'><button name='btn' id='button'>Try again</button></form></div></div>";
print "<hr>";
print "<div id='link'><a href=\"results.php\">See Aggregate Results</a></div>";

?>























