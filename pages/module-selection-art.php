<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script type="text/javascript" src="../stickytooltip.js">
		/***********************************************
		* Sticky Tooltip script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
		***********************************************/
	</script>
	<link rel="stylesheet" type="text/css" href="../stickytooltip.css" /> <!--this stylesheet contains data for the image tooltip-->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<LINK href="../biy-stylesheet.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jquery.color.js"></script>
	<script type="text/javascript">		
		$(document).ready(function() {
			$("#menu-jquery li").show(300, function(){  //300 is the speed at which show animation plays
			$('#menu-jquery li').hover(	//the hover function only plays after the show animation is finished		
				function() {					
					$(this).css('padding', '3px 0px 0px 0px')
					.stop()
							 .animate({	 'paddingLeft'	: '0px', 
										 'paddingRight'	: '0px',
										 'paddingTop': '3px',
										 'backgroundColor':'#F2F2F2'}, 
										 'fast');
				}, 
				function() {					
					$(this).css('padding', '3px 0px 0px 0px')
					.stop()
							 .animate({'paddingLeft'	: '0px', 
										'paddingRight'	: '0px',
										'paddingTop' : '3px',											
										'backgroundColor' :'#FFFFFF'}, 
										'fast');			
				})	
			});	
		});
	</script>	
	<script language="javascript">
	function numberofCats(){ //counts the number of categories that type has
		<?php
		include("../db-connect.php");
		$temp = mysqli_query($con, "SELECT * FROM `category_table` WHERE `typeID`= 3"); //typeID =3 for art
		$counter=0;
		while($info = mysqli_fetch_array( $temp )){
			$counter++;
		}
		echo "var cats =" .$counter. ";"; 
		?>
		return cats; //what about dogs?
	}
	function changeCategory(subID,count)
	{	
		var position=(count *120) - 85; //used solely to control the position of the red line the numbers here are calibrated so that it aligns with the buttons
		document.getElementById("redline").style.left= position +"px"; //redline moves to the position of the subcategory that is currently selected
		document.getElementById("redline").style.display= "none"; // also, redline is invisible and serves only to pass parameters
		//AJAX Script here
		//the AJAX inserts the code from module-selection-modified.php into the content div. This makes the content display the module icons
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("content").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","../module-selection-modified.php?cat="+ subID +"&type=3",true); //type=3 always for art
		xmlhttp.send();
		//AJAX script ends here
		var categories = numberofCats(); //number of categories for this type, used in the following loop
		//this loop sets all of the buttons to their default, unselected style
		while(categories >= 0){
			document.getElementById("cat" + categories).className="button";
			categories--;
		}
		//then only the button that has just been clicked changed its style to the "button-clicked"
		document.getElementById("cat" + count).className="button-clicked";
	}
	</script>
</head>
<body>
	<?php include("../bib-header-menu.php"); ?>
	<script language="javascript">
		//this script changes the attributes of one of the header button elements in the included header
		document.getElementById("art").style.backgroundImage="url('images/button-down.png')"; //change the background image to let users know that they are on this module selection page
		document.getElementById("art").onmouseout="";	//remove the mouseout event so that it does not change back when hovering
	</script>
	<div class="title-wrapper"><div id="redline"></div></div>
	<div class="selection-container"> <!--this div contains all of the subcategory buttons, including the view all-->
		<ul type="none" id="menu-jquery"> <!-- unordered list of all subcategories-->
			<li id="cat0" class="button" onClick="changeCategory(0,0)"> View All </li> <!-- view all button NOTE:view all does not actually have a subcategoryID, it is 0 here so that the changeCategory function works-->
			<?php
			include("../db-connect.php");
			$temp = mysqli_query($con, "SELECT * FROM `category_table` WHERE `typeID`= 3"); //typeID =3 for art
			$counter=1; //used to label each category selection button as 1,2,3,4 ...
			while($info = mysqli_fetch_array( $temp )){//populates the row of categories with the categories
				//each category button has an id "cat1", "cat2", "cat3", ... each button calls changeCategory with 2 arguments: its subcategoryID from the database, and its count value
				//NOTE: count and subCategoryID are not always the same value
				echo "<li id=\"cat".$counter."\" class=\"button\" onClick=\"changeCategory(" .$info['subcategoryID']. ",". $counter . ")\">". $info['name'] ."</li>";
				$counter++;
			}
			?>
		</ul>
	</div>
	<script>
		//changeCategory(0,0); //view all is selected by default, CAUSING ISSUES
	</script>	
	<div class="gray-line"></div>
	<div id="content"> <!-- This contains the icons of all the modules. When changeCategory is called the innerHTML of content is changed-->
		<img class="charlotte" src="images/charlotte.png">
	</div>
	<div class="bottom-info"><?php include("../biy-bottom-info.html"); ?></div>
</body>
</html>