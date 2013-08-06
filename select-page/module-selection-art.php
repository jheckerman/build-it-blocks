<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<LINK href="../biy-stylesheet.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jquery.color.js"></script>
	<script type="text/javascript">		
		$(document).ready(function() {
			$("#menu-jquery li").show(300, function(){
			$('#menu-jquery li').hover(			
				function() {					
					$(this).css('padding', '3px 0px 0px 0px')
					.stop()
							 .animate({	 'paddingLeft'	: '0px', 
										 'paddingRight'	: '0px',
										 'paddingTop': '3px',
										 //'color':'#4040ff',
										 'backgroundColor':'#F2F2F2'}, 
										 'fast');
				}, 
				function() {					
					$(this).css('padding', '3px 0px 0px 0px')
					.stop()
							 .animate({'paddingLeft'	: '0px', 
										'paddingRight'	: '0px',
										'paddingTop' : '3px',	
										//'color':'#404040',										
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
		var position=(count *120) - 85;
		document.getElementById("redline").style.left= position +"px";
		document.getElementById("redline").style.display= "none";
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
		var categories = numberofCats(); 											//number of categories for this type
		while(categories >= 0){
			document.getElementById("cat" + categories).className="button";
			categories--;
		}
		document.getElementById("cat" + count).className="button-clicked";
	}
	</script>
</head>
<body>
	<?php include("../bib-header-menu.php"); ?>
	<script language="javascript">
		document.getElementById("art").style.backgroundImage="url('images/button-down.png')"; //turn button white to let users know that 
		document.getElementById("art").onmouseout=""; //they are on this module selection page
	</script>
	<div class="selection-container">
		<ul type="none" id="menu-jquery">
			<li id="cat0" class="button" onClick="changeCategory(0,0)"> View All </li>
			<?php
			include("../db-connect.php");
			$temp = mysqli_query($con, "SELECT * FROM `category_table` WHERE `typeID`= 3"); //typeID =3 for art
			$counter=1; //used to label each category selection button as 1,2,3,4 ...
			while($info = mysqli_fetch_array( $temp )){
				echo "<li id=\"cat".$counter."\" class=\"button\" onClick=\"changeCategory(" .$info['subcategoryID']. ",". $counter . ")\">". $info['name'] ."</li>";
				$counter++;
			}
			?>
		</ul>
	</div>
	<script> 
		$("#menu-jquery li").show(300); //some animation to display categories
		//changeCategory(0,0); //view all is selected by default
	</script>
	<div class="gray-line"></div>
	<div id="content">
		<img class="charlotte" src="images/charlotte.png">
	</div>
</body>
</html>