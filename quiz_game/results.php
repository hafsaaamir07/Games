<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		body{
			background-color: #E8DED1;
		}
		h1{
			color:#CD5E77;
		}
		h4{
			font-family: monospace;
			font-size: 18px;
			color: #e05a00;
		}

		.container{
			width: 600px;
			height: 300px;
		}

		.bargraph{
			width: 10%;
			height: 50px;
			border: 2px solid black;
		}
		#homer_bar{
			background-color: #6684A1;
			border: 4px solid #6684A1;
		}
		#marge_bar{
			background-color: #3CB371;
			border: 4px solid #2E8B57;
		}
		#bart_bar{
			background-color: #399D9A;
			border: 4px solid #399D9A;
		}
		#lisa_bar{
			background-color: #8F5168;
			border: 4px solid #8F5168;
		}
		#link{
			font-family: monospace;
			font-size: 25px;
		}

	</style>
</head>
<body>
	<h1>Simpson Quiz Results</h1>

	<?php

	$homer_total=0;
	$marge_total=0;
	$bart_total=0;
	$lisa_total=0;
	$total=0;


	//define the file where we need to get the quiz results from

	$file = getcwd().'/data/answers.txt';

	//get the data from the file
	$alldata = trim(file_get_contents($file));

	//since all data is a big string we need to seperate it by a line break
	$lines = explode("\n", $alldata);// this is an array so we need to loop over it and get the results 

	//counting how many of each character we got and storing it in a variable
	foreach ($lines as $i){
		if($i == "Homer"){
			$homer_total++;
		}
		else if($i == "Marge"){
			$marge_total++;
		}
		else if($i == "Bart"){
			$bart_total++;
		}
		else if ($i == "Lisa"){
			$lisa_total++;
		}

		$total++;
	}
	

	$homer_percent = (int)(($homer_total/$total)*100);
	$marge_percent = (int)(($marge_total/$total)*100);
	$bart_percent = (int)(($bart_total/$total)*100);
	$lisa_percent = (int)(($lisa_total/$total)*100);


	print "<h4>In total there have been $total quiz submissions</h4>";

	print "<div class = 'container'>";
	print "<div id='homer_bar' style='width: ".$homer_percent."%;' class='bargraph'> Homer $homer_percent%</div>";
	print "<div id='marge_bar' style='width: ".$marge_percent."%;' class='bargraph'>Marge $marge_percent%</div>";
	print "<div id='bart_bar' style='width: ".$bart_percent."%;' class='bargraph'>Bart $bart_percent%</div>";
	print "<div id='lisa_bar' style='width: ".$lisa_percent."%;'class='bargraph'>Lisa $lisa_percent%</div>"; 
	print "</div>";
	print "<div id='link'><a href ='index.php'>Back to Quiz<a></div>"



























	?>

</body>
</html>