<html>
<head></head>
<body>
	<br/><br/> 
	<script>
		var a = "<br><br> <table width='950px' border='0' style='margin:auto'>";		
		<?php
			$row ="";
			include("db-connect.php");
			$apptable = "applications";  //the name of the table containing applications
			$temp = mysqli_query($con, "SELECT * FROM `" . $apptable . "`"); //get the rows
			while($app = mysqli_fetch_array($temp)){
				$applink="<a href=". $app['link'] ."> Link </a>";
				$appheader="<h2>". $app['title'] ."</h2>";
				$row = $row . "<tr><td> <img src=". $app['picture'] . "></td> <td> ". $appheader . $app['description'] ."<br>Here a link to this project:" .$applink . "</td></tr>";
			}
			echo "var row= ' " . $row. "';";
			mysqli_close($con);
		?>
		var b = "</table><br><br>";
		document.write("<div>" + a + row + b + "</div>");	
		</script>
</body>
</html>