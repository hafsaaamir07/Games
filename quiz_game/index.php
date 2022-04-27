<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-color: #E8DED1;
		}
		h2{
			font-family: monospace;
			color: #6A423D;
		}
		select{
			width: 200px; 
			text-align-last:center;
		}
		h1{
			font-family: serif;
			color: #648981;
			text-align: center;;
		}
		#form{
			text-align: center;
		}

		#btn{
			margin-top: 15px;
			font-family: monospace;
		}
		#link{
			font-family: monospace;
			text-align: center;
			font-size: 15px;
			margin-top: 15px;
		}
		.result{
			width: 300px;
			border: 5px solid purple;
			margin: auto;
			margin-top: 0%;
		}
		#name{
			font-size: 30px;
			color: #CD5E77;
			text-align: center;
			font-family: monospace;
		}
		#pic{
			margin: 15px;
			text-align: center;
		}
		#button{
			margin-left: 40%;
		}
		#alert{
			color: red;
			font-size: 20px;
		}
		#link{
			text-align: center;
			font-family: monospace;
			font-size: 20px;
		}


	</style>
</head>
<body>

	<?php
	

	//error_reporting(0);

	if(isset($_GET['question'])){
		if ($_GET['question']){
			print "<strong id ='alert'>Please answer all the questions!</strong>";
		}

	}

	if(isset($_COOKIE['character'])){
		if ($_COOKIE['character']){
			if ($_COOKIE['character'] == "Homer"){
				print "<h1>Which Simpsons Character Am I?</h1>";
				print "<hr>";
				print "<div class='result'>";
				print "<div id ='name'> You are Homer!</div>";
				print "<div id='pic'><img src='images/Homer.png'></div>";
				print "<form action='clearcookies.php'><button id='button'>Try Again</button></form>";
				print "</div>";
				print "<hr>";
				print "<div id='link'><a href=\"results.php\">See Aggregate Results</a></div>";

			}
			else if ($_COOKIE['character'] == "Marge"){
				print "<h1>Which Simpsons Character Am I?</h1>";
				print "<hr>";
				print "<div class='result'>";
				print "<div id ='name'> You are Marge!</div>";
				print "<div id='pic'><img src='images/Marge.png'></div>";
				print "<form action='clearcookies.php'><button id='button'>Try Again</button></form>";
				print "</div>";
				print "<hr>";
				print "<div id='link'><a href=\"results.php\">See Aggregate Results</a></div>";
				
			}
			else if ($_COOKIE['character'] == "Bart"){
				print "<h1>Which Simpsons Character Am I?</h1>";
				print "<hr>";
				print "<div class='result'>";
				print "<div id ='name'> You are Bart!</div>";
				print "<div id='pic'><img src='images/Bart.png'></div>";
				print "<form action='clearcookies.php'><button id ='button'>Try Again</button></form>";
				print "</div>";
				print "<hr>";
				print "<div id='link'><a href=\"results.php\">See Aggregate Results</a></div>";
				
			}
			else{
				print "<h1>Which Simpsons Character Am I?</h1>";
				print "<hr>";
				print "<div class='result'>";
				print "<div id ='name'> You are Lisa!</div>";
				print "<div id='pic'><img src='images/Lisa.png'></div>";
				print "<form action='clearcookies.php'><button id='button'>Try Again</button></form>";
				print "</div>";
				print "<hr>";
				print "<div id='link'><a href=\"results.php\">See Aggregate Results</a></div>";

			}
		}

	}
	else{

	?>

	<h1> Which Simpson Character Am I?</h1>
	<hr>
	<form action="processresults.php" method="POST" id ="form">
		<div>
			<h2>what is your ideal job?</h2>
			<select name="job">
				<option value="default">Select a job</option>
				<option value="homer">Working at a bakery</option>
				<option value="marge">French tutor</option>
				<option value="bart">Prank phone call specialist</option>
				<option value="lisa">College professor</option>
			</select>
		</div>

		<div>
			<h2>what is your favorite food?</h2>
			<select name="food">
				<option value="default">Select a food</option>
				<option value="lisa">Donuts</option>
				<option value="bart">Apple pie</option>
				<option value="marge">Krusty flakes</option>
				<option value="homer">Anything organic and locally sourced</option>
			</select>
		</div>

		<div>
			<h2>what is your favorite hobby?</h2>
			<select name="hobby">
				<option value="default">Select a hobby</option>
				<option value="bart">Watching tv</option>
				<option value="marge">Knitting</option>
				<option value="lisa">Skateboarding</option>
				<option value="homer">Reading</option>
			</select>
		</div>

		<div>
			<h2>what is your biggest fear?</h2>
			<select name="fear">
				<option value="default">Select a fear</option>
				<option value="lisa">Sock puppet</option>
				<option value="bart">Flying</option>
				<option value="marge">I'm fearless, man</option>
				<option value="homer">Dogs</option>
			</select>
		</div>
		<button id = "btn">What character am I</button>
	</form>
	<hr>
	<div id ="link"> <a href="results.php">See Aggregate Results</a></div>

	<?php
	};


	?>



	






</body>
</html>