<div id="header-menu-container" >
	<ul style="margin:0px;  list-style-type:none; float:left; height:50px; width:800px; padding:0px; text-align:center; clear:both">
		<li id="biy-logo"> <!-- I'm not really sure 35px is the right size, we need to do some calculation to make the BIY logo align with the buttons. -->
		<!-- so, the leftest item in the navigation bar is the BIY logo that is an active link to the main BIY website-->
			<a href="http://build-it-yourself.com"><img src="images/biy-logo.gif"></a>
		</li>			  
		<li class="nav-button">
		<!-- the list items themselves float to the left, but the insides of divs are centered -->
			<a href="../bib-main-page.php">
			<!-- inside of the reference we put a div that contains the button. Unless clicked, it is on button-up.png by default, and goes to button-down.png when we hover over it. -->
			<!-- If clicked, it stays on button-down.png at all times.  -->
				<div id="home" class="menu-button-blocks">
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
</div>
<script language="javascript">
	function changeImage(x,image){ // this makes changing the path to the image for pressed button and unpressed button less of a pain
		x.style.backgroundImage = "url("+image+")"; 
	}
</script>