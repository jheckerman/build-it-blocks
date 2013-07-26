<!DOCTYPE html>
<html>
<head>
	<style>
		.type-select { 
			background:#6E6E6E; 
			margin:auto;
			width:180px;
			height:100px; 
			position:relative;
			text-align:center;
			z-index:-1;
		}
		.icon {
			margin-left:auto;
			margin-right:auto;
			position:relative;
			z-index:-2;
			border: solid black;
		}
		p {
			font-family:"arial",arial, sans-serif;
			font-size:20pt;
		}
	</style>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script>
		$(document).ready(function() {
			document.getElementById('junki').style.display ='none';
			document.getElementById('legoi').style.display ='none';
			document.getElementById('arti').style.display ='none';
			document.getElementById('programmingi').style.display ='none';
			$('#junk').mouseenter(
				function() {
					$('#junkc').stop().stop().stop().animate({'top' : '50px'}, 'fast');				
					$('#junkc').slideUp();
					$('#junki').fadeIn();
					document.getElementById('junki').style.display='block';
				}
			);
			$('#junk').mouseout(
				function(){
					document.getElementById('junki').style.display='block';
					$('#junki').stop().stop().stop().fadeOut();
					$('#junkc').slideDown();
					$('#junkc').animate({	'top'	: '0px' , 'height' : '100px'},'fast');
				}
			);
			$('#lego').mouseenter(
				function () {
					$('#legoc').stop().stop().stop().animate({'top' : '50px'}, 'fast');	
					$('#legoc').slideUp();
					$('#legoi').fadeIn();
					document.getElementById('legoi').style.display='block';
				}
			);
			$('#lego').mouseout(
				function(){
					document.getElementById('legoi').style.display='block';
					$('#legoi').stop().stop().stop().fadeOut();	
					$('#legoc').slideDown();
					$('#legoc').animate({	'top'	: '0px' , 'height' : '100px'},'fast');
				}
			);
			$('#art').mouseenter(
				function () {
					$('#artc').stop().stop().stop().animate({'top' : '50px'}, 'fast');		
					$('#artc').slideUp();
					$('#arti').fadeIn();
					document.getElementById('arti').style.display='block';
				}
			);
			$('#art').mouseout(
				function(){
					document.getElementById('arti').style.display='block';
					$('#arti').stop().stop().stop().fadeOut();
					$('#artc').slideDown();
					$('#artc').animate({	'top'	: '0px' , 'height' : '100px'},'fast');
				}
			);
			$('#programming').mouseenter(
				function () {
					$('#programmingc').stop().stop().stop().animate({'top' : '50px'}, 'fast');			
					$('#programmingc').slideUp();
					$('#programmingi').fadeIn();
					document.getElementById('programmingi').style.display='block';
				}
			);
			$('#programming').mouseout(
				function(){
					document.getElementById('programmingi').style.display='block';
					$('#programmingi').stop().stop().stop().fadeOut();
					$('#programmingc').slideDown();
					$('#programmingc').animate({	'top'	: '0px' , 'height' : '100px'},'fast');
				}
			);
		});
	</script>
</head>

<body>
	<?php include("biy-header.html");?>
	
	
	<table style="margin:auto; height:400px;" border="0px">
		<tr>
			<td onClick="document.location.href='select-page/module-selection-junk.php';" id="junk" style="width:250px; opacity:1; cursor:pointer;cursor:hand">
				<img id="junki" class="icon" src="menu-icons/menu-junk.jpg">
				<div id="junkc" class="type-select">
				<p>
					<br>Junk</p>
				</div>
			</td>
			<td onClick="document.location.href='select-page/module-selection-lego.php';" id="lego" style="width:250px; opacity:1; cursor:pointer;cursor:hand">
			<img id="legoi" class="icon" src="menu-icons/menu-lego.jpg">
				<div id="legoc" class="type-select">
					<p>
						<br>LEGO
					</p>
				</div>
			</td>
			<td onClick="document.location.href='select-page/module-selection-art.php';" id="art" style="width:250px; opacity:1; cursor:pointer;cursor:hand">
				<img id="arti" class="icon" src="menu-icons/menu-art.jpg">
				<div id="artc" class="type-select">
					<p>
						<br>Art
					</p>
				</div>
			</td>
			<td onClick="document.location.href='select-page/module-selection-programming.php';" id="programming" style="width:250px; opacity:1; cursor:pointer;cursor:hand">
				<img id="programmingi" class="icon" src="menu-icons/menu-pragramming.jpg">
				<div id="programmingc" class="type-select">
					<p>
						<br>Programming
					</p>
				</div>
			</td>
		</tr>
	</table>
	
	
	
</body>
</html>