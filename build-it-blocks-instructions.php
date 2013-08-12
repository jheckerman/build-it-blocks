<html>
<head>
	<LINK href="biy-stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<title>Module</title>
	
	<!-- CSS&JS for slidesjs slider -->
	<link rel="stylesheet" href="css/slidesjs.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/module-stylesheet.css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="jquery.slides.min.js"></script>
	<!-- End CSS&JS for slidesjs slider -->

	<script type="text/javascript">
		var step=1; //variable that tracks which step you are on
		var stepArr = new Array(); //contains all instruction text
		
		<?php // this PHP script gets all the Applications/Instructions information about the module so that it can replace the content of the slider. :)
			include("db-connect.php");
			$module = $_GET["id"]; // the ID is passed by the address of the page
			$temp = mysqli_query($con, "SELECT * FROM `steps` WHERE `moduleID`=" . $module); //get the query of steps
			$i=0;
			while($steps = mysqli_fetch_array($temp)){ //every step has a description; this loop fills all the descriptions.
				echo "stepArr[".$i."]='" . $steps['step-description'] . "';" ;
				$i++;
			}
		?>
		
		function changeStep(number){
			var newStep = stepArr[number-1];
			document.getElementById("caption2").innerHTML="<h4> Step: " + number + "</h4>"  + newStep;
		}
			 
	</script>
 
	<script>
		$(function() {
			$('#slides2').slidesjs({
				width: 475,
				height: 350,
				navigation: false,
				callback:{
					complete: function(number){
						changeStep(number);
					}
				}
			});
		});
	</script>

</head>
<body>
	<?php include("bib-header-menu.php"); ?>
	<div>
		<?php // this script gets the title, author and date of the module; they are displayed as a top bar.
			include("db-connect.php");
			$module = $_GET["id"]; // the ID is passed by the address of the page
			$temp = mysqli_query($con, "SELECT * FROM `module_index` WHERE `ID`=" . $module); //query for the module
			$curr_module = mysqli_fetch_array($temp);
			$curr_title = $curr_module['name']; //this gets the name of the module
			$curr_author_ID = $curr_module['authorID']; // this gets the ID of the author of the module (it's a number)
			$curr_author = mysqli_fetch_array(mysqli_query($con, "SELECT * from `author` WHERE `authorID`=" . $curr_author_ID)); // get the author's row in the Author table by the ID we just introduced
			$curr_author_name = $curr_author['name']; // get the author's name
			$curr_date = date_format(date_create($curr_module['date-posted']), 'm/d/Y'); // we need first to convert the date from MySQL format to 
			
			//echoing the HTML for the title, author and date:
			echo "<div class='title-wrapper'><div class=\"module-title\">".$curr_title . "</div ><div  class=\"module-subtitle\">Added by " . $curr_author_name. " on " . $curr_date. "</div></div>";
		?>
		<div class="line"> </div>
		<br/>
	</div>
	<div id="instr">
		<div class="container-instructions"> <!--this slider contains the instructions-->
			<div class="container" id="c2">
				<div id="slides2">
					<?php
						include("db-connect.php");
						$module = $_GET["id"]; // the ID is passed by the address of the page
						$temp = mysqli_query($con, "SELECT * FROM `steps` WHERE `moduleID`=" . $module); //get the query of instructions
						while($array = mysqli_fetch_array($temp)){ //instruction slides contain only the pictures, and the step# + descriptions are outside of the slider
							echo "<div id=\"instructions-slider\">";
								echo "
										<div class=\"img_wrapper\">
										<img class=\"wrapped_picture\" src=\"" .$array['image-path'] ."\" alt=\"\">
									</div>\n";
							echo "</div>";
						}
						mysqli_close($con);
					?>
					<a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a> <!--the LEFT arrow -->
					<a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a> <!--the RIGHT arrow -->
				</div>
			</div>
		</div>
		<div id="caption2"> <!--text of the instructions-->
			<script>
				changeStep(1); //sets text to the text of step 1 on start up
			</script>
		</div>
		<div class="centered-div">
			<?php
			include("db-connect.php");
			$module_number = $_GET["id"]; // the ID is passed by the address of the page
			$temp = mysqli_query($con, "SELECT * FROM `module_index` WHERE `ID`=" . $module_number);  //get the query of instructions
			$module = mysqli_fetch_array($temp);
			$module_download_address = $module ['download-link']; //get the download link for the module (some modules only)
			$module_download_type = $module ['download-type']; // get the type of download: plain text,e.g. "this module"
			if($module_download_type!= ""){
				echo "<a href=\" ".$module_download_address."\">Download ".$module_download_type."</a>"; //if the download-type is "this module", you output "...Download this module."
			}
			?>
		</div>
		<div class="centered-div" onClick="HideInstr()">
			<?php 
			$moduleID = $_GET["id"]; 
			echo "<a href=\"build-it-blocks-overview.php?id=" . $moduleID. "\"><img src=\"images/overview-button.png\" /></a>"
			?>
		</div>
	</div>	
	<div class="bottom-info"><?php include("biy-bottom-info.html"); ?></div>
</body>
</html>

