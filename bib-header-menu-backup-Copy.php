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
	<div align="center">  
	  
	  <table align="center" width="800px" height="80px" cellpadding="0" cellspacing="0" >
		<tr>
		  <td align="center" width="250">
			  <a href="http://build-it-yourself.com"><img src="images/biy-logo.gif"></a>
		  </td>
		  <td align="center" width="110">
			  <a href="module-selection-junk.php">
				<div id="junk" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
					Junk
				</div>
			  </a>
		  </td>
		  
		  <td align="center" width="110">
			  <a href="module-selection-lego.php">
				<div id="lego" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
					LEGO
				</div>
			  </a>
		  </td>
		  
		  <td align="center" width="110">
			  <a href="module-selection-art.php">
				<div id="art" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
					Art
				</div>
			  </a>
		  </td>
		  
		  <td align="center" width="110">
			  <a href="module-selection-programming.php">
				<div id="programming" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
					Programming
				</div>
			  </a>
		  </td> 
		  
		  <td align="center" width="110">
			  <a href="module-selection-minecraft.php">
				<div id="minecraft" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
					Minecraft
				</div>
			  </a>
		  </td> 
		  
		</tr>
	  </table>
	  <div style="height:1px; width:800px; background-color:#404040; margin-bottom:-4px;"> </div>
</body>
</html>