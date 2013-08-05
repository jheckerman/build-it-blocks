<html>
<head>
	<LINK href="biy-stylesheet.css" rel="stylesheet" type="text/css"> 
	<style type="text/css">a {text-decoration: none}</style> 
	<script language="javascript">
		function changeImage(x,image){ // this makes changing the path to the image for pressed button and unpressed button less of a pain
			x.style.backgroundImage = "url("+image+")"; 
		}
	</script>
</head>
<body>
	<!-- the 'clear:both' modifier centers the div but it looks like it messes up with other stuff. If there's a possibility, replace it with something else. -->
	<!-- Still, centering is our first priority. Too sadly, 'align:center' is deprecated. -->
	<div id="header-menu-container" >
		<ul id="navigation-bar">
		<!-- for some unknown reason the next two lines were added automatically by Github sync tool, and even though the div and the ul are not closed anywhere, -->
		<!-- it does HTML magic and doesn't want to center without them. -->
		<!-- I guess HTML is tough for no reason from time to time. And life is so. -->
			<div style="width:800px; margin-left:auto; margin-right:auto"> <!--HTML MAGIC LINE 1-->
				<ul style="margin:0px;  list-style-type:none; float:left; height:50px; width:800px; padding:0px; text-align:center; clear:both"> <!--HTML MAGIC LINE 2-->
					<li id="biy-logo"> <!-- I'm not really sure 35px is the right size, we need to do some calculation to make the BIY logo align with the buttons. -->
					<!-- so, the leftest item in the navigation bar is the BIY logo that is an active link to the main BIY website-->
						<a href="http://build-it-yourself.com"><img src="images/biy-logo.gif"></a>
					</li>			  
					<li class="nav-button">
					<!-- the list items themselves float to the left, but the insides of divs are centered -->
						<a href="../bib-main-page.php">
						<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
						<!-- If clicked, it stays on button-down.png at all times.  -->
							<div id="home" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
								Blocks <!--I really really like it with one word only; we could always make it back to 'Blocks Home' :)-->
							</div>
						</a>
					</li>
					<li class="nav-button">
					<!-- the list items themselves float to the left, but the insides of divs are centered -->
						<a href="module-selection-junk.php">
						<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
						<!-- If clicked, it stays on button-down.png at all times.-->
							<div id="junk" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
								Junk
							</div>
						</a>
					</li>
					<li class="nav-button">
					<!-- the list items themselves float to the left, but the insides of divs are centered -->
						<a href="module-selection-lego.php">
						<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
						<!-- If clicked, it stays on button-down.png at all times. -->
							<div id="lego" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
								LEGO
							</div>
						</a>
					</li>
					<li class="nav-button">
					<!-- the list items themselves float to the left, but the insides of divs are centered -->
						<a href="module-selection-art.php">
						<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
						<!-- If clicked, it stays on button-down.png at all times. -->
							<div id="art" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
								Art
							</div>
						</a>
					</li>
					<li class="nav-button">
					<!-- the list items themselves float to the left, but the insides of divs are centered -->
						<a href="module-selection-programming.php">
						<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
						<!-- If clicked, it stays on button-down.png at all times. -->
							<div id="programming" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
								Code
							</div>
						</a>
					</li> 
					<li class="nav-button">
					<!-- the list items themselves float to the left, but the insides of divs are centered -->
						<a href="module-selection-minecraft.php">
						<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
						<!-- If clicked, it stays on button-down.png at all times. -->
							<div id="minecraft" class="menu-button" onMouseOver="changeImage(this,'images/button-down.png')" onMouseOut="changeImage(this,'images/button-up.png')">
								Minecraft
							</div>
						</a>
					</li>
				</ul>
			</div> <!-- see, we do not close the div and the ul and I hate it, but it works when it's written wrong. It, on the other hand, refuses to work when written correctly. Makes me a bit sad, but I almost got over it. -->
			<div id="header-line">
	  	</div>
		<!-- it turns out that without putting clear:none somewhere, we cannot center without using the clear:both modifier. -->
		<!-- That's why we put it in an empty span. And from here on, we can center the divs, spans, uls and tables that come next. -->
	  	<span class="empty-span"> </span> 
</body>
</html>
