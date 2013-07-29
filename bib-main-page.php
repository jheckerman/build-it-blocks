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
	
	
	<!--NEW ON 7/26/13-->
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="menu-format.css" type="text/css" media="screen"/>
        <style>
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:150px;
			}
		</style>
	
</head>

<body>
	<?php include("biy-header.html");?>
	
	
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="select-page/module-selection-junk.php">
						<img src="menu-icons/menu-junk.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><div style="text-align:center">Junk</div></span>
						</span>
					</a>
				</li>
				<li>
					<a href="select-page/module-selection-lego.php">
						<img src="menu-icons/menu-lego.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><div style="text-align:center">Lego</div></span>
						</span>
					</a>
				</li>
				<li>
					<a href="select-page/module-selection-art.php">
						<img src="menu-icons/menu-art.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><div style="text-align:center">Art</div></span>
						</span>
					</a>
				</li>
				<li>
					<a href="select-page/module-selection-programming.php">
						<img src="menu-icons/menu-programming.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><div style="text-align:center">Programming</div></span>
						</span>
					</a>
				</li>
				<li>
					<a href="select-page/module-selection-minecraft.php">
						<img src="menu-icons/menu-minecraft.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link"><div style="text-align:center">Minecraft</div></span>
						</span>
					</a>
				</li>
			</ul>
	
	
	
	<!-- The JavaScript -->
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
							'width':'210px',
							'height':'210px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'110px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'83px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '210px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-210px';
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
						 .animate({'top':'25px'},500);
				});
            });
        </script>
	
	
</body>
</html>