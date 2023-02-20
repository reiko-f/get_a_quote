<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
			body {
				font-family: 'Comfortaa', sans-serif;						
				background: linear-gradient(0.25turn, rgb(52,152,219 ), rgb(247,220,111), rgb( 245,183,177));
				margin: 30px;
			}

			input {
				padding: 15px;
				height: 50px;
				width: 50px;
				border-radius: 15px;
			}

			button {
				margin-left: 30px;
				height: 50px;
				width: 50px;
				border-radius: 15px;
				text-align: center;
				background-color: lightgreen;
			}

			div {
				padding: 30px;
				height: 200px;
				width: 500px;
				text-align: center;
				font-size: 2em;;
			}
		</style>
		<title>Get a quote for the day!</title>
	</head>
	<body>
		<h1>Get a quote for today!</h1>
		<p>Enter a number from 0 - 100.</p>
		<form action="quotes.php" method="GET">
			<input type="text" name="num"><br><br>
			<button type="submit">Get Quote</button>
		</form>

		<?php
			if (isset($_GET["num"])):
				$num = $_GET["num"];					

				$json = file_get_contents("quotes.json");
				$json_data = json_decode($json, true);
				// print_r($json_data);				
				
				foreach ($json_data as $i =>  $item) {
					if ($num == $i) {
						echo "<div>" . $json_data[$i]["quote"] . "</div>";

						// To know what's in $item
						// echo "<pre>"; var_dump($item);
					}

				}

				// for ($i = 0; $i < count($json_data); $i++) {
				// 	if ($num == $i) {
				// 		echo "<div>" . $json_data[$i]["quote"] . "</div>";
				// 	}
					
				//						

			endif;
					
		?>
	</body>
</html>

<?php

?>

