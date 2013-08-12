<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="menu-stylesheet.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="biy-stylesheet.css" type="text/css" media="screen"/>
</head>
<body>
	<?php include("bib-header-menu.php");?>
	<div class="gray-line"></div>
	<div class="bib-description-wrapper">
		<div class="module-title">
			Build-It-Blocks is a library of modules that will enable you to build complex projects quickly and reliably.
		</div>
	</div>
	<ul id="sdt_menu" class="sdt_menu">
		<li>
			<a href="select-page/module-selection-junk.php">
				<img src="menu-icons/menu-junk.jpg" alt="">
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link"><div class="menu-text">Junk</div></span>
				</span>
			</a>
		</li>
		<li>
			<a href="select-page/module-selection-lego.php">
				<img src="menu-icons/menu-lego.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link"><div class="menu-text">Lego</div></span>
				</span>
			</a>
		</li>
		<li>
			<a href="select-page/module-selection-art.php">
				<img src="menu-icons/menu-art.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link"><div class="menu-text">Art</div></span>
				</span>
			</a>
		</li>
		<li>
			<a href="select-page/module-selection-programming.php">
				<img src="menu-icons/menu-programming.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link"><div class="menu-text">Code</div></span>
				</span>
			</a>
		</li>
		<li>
			<a href="select-page/module-selection-minecraft.php">
				<img src="menu-icons/menu-minecraft.jpg" alt=""/>
				<span class="sdt_active"></span>
				<span class="sdt_wrap">
					<span class="sdt_link"><div class="menu-text">Minecraft</div></span>
				</span>
			</a>
		</li>
	</ul>
	<br/>
	<div id="main-page-week-module-missions-container">
		<div id="module-of-the-week">
			Module of the Week <br/>
			<img src="http://build-it-yourself.com/images/robots.jpg">
		</div>		
		<div id="missions">
			Missions <br/>
			<img src="http://build-it-yourself.com/images/pirate-team-max-devin.jpg">
		</div>
	</div>
	<div class="bottom-info"><?php include("biy-bottom-info.html"); ?></div>
	
	<!-- The JavaScript that controls animated menu-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'160px',
							'height':'160px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
					     //active text top margin
						 .animate({'top':'70px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
					     //active div height
						 .animate({'height':'50px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '160px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-160px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 //inactive text margin
						 .animate({'top':'15px'},500);
				});
            });
        </script>
</body>
</html>