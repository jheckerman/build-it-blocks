<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<LINK href="../biy-stylesheet.css" rel="stylesheet" type="text/css">
	<style>
	
	.button{
	
	background-color:white; 
	float:left;
	color:#404040;
	text-align:center;
	margin-left:10px;
	margin-right:auto;
	width:110px;
	height:25px;
	padding-top:3px;
	font-family:"verdana", verdana, sans-serif;
	
	}
	
	.button-clicked{

	float:left;
	text-align:center;
	margin-left:10px;
	margin-right:auto;
	width:110px;
	height:25px;
	color:#EB0000;
	padding-top:3px;
	font-family:"verdana", verdana, sans-serif;
	
	}

	
	</style>

		<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="jquery.color.js"></script>
		<script type="text/javascript">
			
			$(document).ready(function() {
				
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
		</script>
		
		<script language="javascript">
		function numberofCats(){ //counts the number of categories that type has
			<?php
			include("../db-connect.php");
			$temp = mysqli_query($con, "SELECT * FROM `category_table` WHERE `typeID`= 1"); //typeID =1 lego, same cats as junk
			
			$counter=0;
			while($info = mysqli_fetch_array( $temp )){
				$counter++;
			}
			echo "var cats =" .$counter. ";"; 
			?>
			return cats;
		
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
			xmlhttp.open("GET","../module-selection-modified.php?cat="+ subID +"&type=2",true); //type=2 always for lego
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
	document.getElementById("lego").style.backgroundImage="url('images/button-down.png')"; //turn button white to let users know that 
	document.getElementById("lego").onmouseout=""; //they are on this module selection page
</script>
<div style="width:800px; margins:auto;">
	<div id="redline" style="background-color:#EB0000; height:1px; width:100px; float:left; position:relative; display:none;"> </div>
</div>
<br>
<div style="height:100px; width:800px; background-color:#FFFFFF; margin-left:auto; margin-right:auto; margin-top:-30px;">
	<ul type="none" id="menu-jquery" style="margin-left:-25px">
		<li id="cat0" class="button" style="display:none;" onClick="changeCategory(0,0)"> View All </li>

		<?php
		include("../db-connect.php");
		$temp = mysqli_query($con, "SELECT * FROM `category_table` WHERE `typeID`= 1"); //typeID =1 lego, same cats as junk
		$counter=1; //used to label each category selection button as 1,2,3,4 ...
		while($info = mysqli_fetch_array( $temp )){
			echo "<li id=\"cat".$counter."\" class=\"button\" style='display:none;' onClick=\"changeCategory(" .$info['subcategoryID']. ",". $counter . ")\">". $info['name'] ."</li>";
			$counter++;
		}
		?>
	</ul>

</div>

<script> 
	$("#menu-jquery li").show(300); //some animation to display categories
	changeCategory(0,0); //view all is selected by default
</script>

	<div style="height:1px; width:800px; background-color:#404040; margin-left:auto; margin-right:auto; margin-top:-72px;"></div>
	<div id="content" style="width:800px; height:600px; margin-bottom:50px; margins:auto;" >

	</div>
</body>
</html>