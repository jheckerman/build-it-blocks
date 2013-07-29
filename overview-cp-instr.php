<html>
<head>
	<LINK href="biy-stylesheet.css" rel="stylesheet" type="text/css">
	<LINK href="slider.css" rel="stylesheet" type="text/css">
	<LINK href="slider2.css" rel="stylesheet" type="text/css">
	<LINK href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="http://bxslider.com/sites/default/files/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">	
		(function($){	
			$(function()
			{
				$('#slider2').bxSlider({
				auto: true,
				autoControls: true,
				pause: 5000,
				slideMargin: 20
			});
			});	
		}(jQuery))
	</script>
</head>

<div id="slide_panel">

	<div class="left_button"><a href="">Previous</a></div>
	<div class="right_button"><a href="">Next</a></div>
	<div class="slider_wrapper">
		<ul id="slider2">
			<?php

				include("db-connect.php");
				$module = $_GET["id"];
				$temp = mysqli_query($con, "SELECT * FROM `applications` WHERE `moduleID`=" . $module); //get the rows
				while($array = mysqli_fetch_array($temp)){
					echo "<li>\n<div class=\"img_wrapper\"><img src=\"../" .$array['picture'] ."\" alt=\"\" width=\"360px\"></div>\n<div class=\"caption\">\n";
					echo "\t<h4>" . $array['title'] . "</h4>\n";
					echo "\t\t<p>". $array['description'] ."</p>\n";
					echo "\t</div>";
					echo "</li>";
				}
				mysqli_close($con);
		?>
		</ul>
	</div>
</div>
</html>