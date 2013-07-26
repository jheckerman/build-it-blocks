<!DOCTYPE html>
<html>
<head>
	<LINK href="biy-stylesheet.css" rel="stylesheet" type="text/css">
	<style type="text/css">a {text-decoration: none}</style> 
	<script language="javascript">
		function changeImage(x,image){
			x.style.backgroundImage = "url("+image+")"; 
		}
	</script>
</head>
<body>

	<div style="width:800px; margin-left:auto; margin-right:auto; clear:both;">
		  <ul style="margins:0px;  list-style-type:none; float:left; height:80px; width:800px; padding:0px; text-align:center;">
		  <div style="width:800px; margin-left:auto; margin-right:auto">
		  <ul style="margin:0px;  list-style-type:none; float:left; height:80px; width:800px; padding:0px; text-align:center; clear:both">
			  <li style="float:left; height:35px">
				  <a href="http://build-it-yourself.com"><img src="images/biy-logo.gif" style="max-height:100%"></a>
			  </li>
			  
			  <li style="float:left;">
				  <a href="../bib-main-page.php">
					<div id="home" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
						Blocks Home
					</div>
				  </a>
			  </li>
			  
			  <li style="float:left;">
				  <a href="module-selection-junk.php">
					<div id="junk" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
						Junk
					</div>
				  </a>
			  </li>
			  
			  <li style="float:left;">
				  <a href="module-selection-lego.php">
					<div id="lego" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
						LEGO
					</div>
				  </a>
			  </li>
			  
			  <li style="float:left;">
				  <a href="module-selection-art.php">
					<div id="art" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
						Art
					</div>
				  </a>
			  </li>
			  
			  <li style="float:left;">
				  <a href="module-selection-programming.php">
					<div id="programming" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
						Programming
					</div>
				  </a>
			  </li> 
			  
			  <li style="float:left;">
				  <a href="module-selection-minecraft.php">
					<div id="minecraft" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
						Minecraft
					</div>
				  </a>
			  </li> 
		  </ul>
	  </div>
	  <div style="height:1px; width:800px; background-color:#404040; margin-left:auto; margin-right:auto; margin-bottom:10px; margin-top:0px; clear:both"> </div>
	  <span style="clear:none;"> </span>

</body>
</html>
