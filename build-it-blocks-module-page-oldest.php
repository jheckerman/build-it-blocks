<!DOCTYPE html>

<html>
	<head>
	<LINK href="biy-stylesheet.css" rel="stylesheet" type="text/css">
	<style type="text/css">a {text-decoration: none}</style>
	<script language= "Javascript">
		function changeLinkColor(link,cl){ //cl = pink when hover is true, cl = blue when not hovering
		link.style.color= cl;
		}
	//	function DisplayVideo(){
	//	var a = "<br><br>"; //spacers
	//	info.innerHTML=a + "<iframe width='560' height='315' src='http://www.youtube.com/embed/kWLNZzuo3do' frameborder='0' allowfullscreen></iframe>";
	//	info.style.height="600px";
	//	Abutton.className="menu";
	//	Pbutton.className="menu";
	//	Vbutton.className="menu-clicked";
	//	Ibutton.className="menu";
	//	}
		function DisplayPicture(){
		<?php
			$con=mysqli_connect("localhost","","","test");
			$picturetable =$_GET["id"] . "-pictures";  //the name of the table containing appropriate imgs
			$temp = mysqli_query($con, "SELECT * FROM `" . $picturetable . "` WHERE `id`=1"); //get the first row of the picture table
			$fetch = mysqli_fetch_array($temp); //fetches the data and puts it into an array
			$img = $fetch['img-src'];
			echo "var img= ' " . $img. "';";
			echo "var descrip ='". $fetch['description'] ."';";
			mysqli_close($con);
		?>
		var a = "<br><br>";
		var b = "<br><br><p style='width:400px; margin-left:100px; margin-right:100px;'>"+ descrip +"</p>";
		info.innerHTML=a + "<img src='" + img + "' style='float:right; margin-right:100px;'>" + b;
		info.style.height="600px";
		Abutton.className="menu";
		Pbutton.className="menu-clicked";
		//Vbutton.className="menu";
		Ibutton.className="menu";
		}
		function DisplayApp(){
		
		var a = "<br><br> <table width='950px' border='0' style='margin:auto'>";
		
		<?php
			$row ="";
			$con=mysqli_connect("localhost","","","test");
			$apptable =$_GET["id"] . "-applications";  //the name of the table containing applications
			$temp = mysqli_query($con, "SELECT * FROM `" . $apptable . "`"); //get the rows
			
			while($app = mysqli_fetch_array($temp)){
				$applink="<a href=". $app['link'] ."> Link </a>";
				$appheader="<h2>". $app['name'] ."</h2>";
				$row = $row . "<tr><td> <img src=". $app['icon-src'] . "></td> <td> ". $appheader . $app['text'] ."<br>Here a link to this project:" .$applink . "</td></tr>";
			}
			echo "var row= ' " . $row. "';";
			mysqli_close($con);
		?>
		
		
		var b = "</table><br><br>"
		info.innerHTML=a + row + b;
		info.style.height="";
		Abutton.className="menu-clicked";
		Pbutton.className="menu";
		//Vbutton.className="menu";
		Ibutton.className="menu";
		}
		function DisplayInstr(){
		var a = "<br><br> <table width='950px' border='1' style='margin:auto;'>";
		<?php
			$row ="";
			$con=mysqli_connect("localhost","","","test");
			$instable =$_GET["id"] . "-instructions";  //the name of the table containing appropriate instructions
			$temp = mysqli_query($con, "SELECT * FROM `" . $instable . "`"); //get the rows
			while($instruc = mysqli_fetch_array($temp)){
				if($instruc['large-img']==1){ //this step has a large image
					$largeviewlink = "<a href=".$instruc['img-src']. ">  <img src=". $instruc['img-src'] . " height=200px width=200px><br>Click for larger view <br></a>"; 
					$row = $row . "<tr><td>". $largeviewlink ."</td><td> ". $instruc['text'] ."</td></tr>";
				}
				else{
					$row = $row . "<tr><td> <img src=". $instruc['img-src'] . " height=200px width=200px></td> <td> ". $instruc['text'] ."</td></tr>";
				}
			}
			echo "var row= ' " . $row. "';";
			mysqli_close($con);
		?>
		var b = "</table><br>";
		info.innerHTML=a + row +b;
		info.style.height="";
		Abutton.className="menu";
		Pbutton.className="menu";
		//Vbutton.className="menu";
		Ibutton.className="menu-clicked";
		}
	</script>
	</head>

<title>
Build-it-Blocks Module
</title>

<body>
<?php include("biy-header.html") ?>

<div class="center-smaller" style="width:500px; margin-top:6px">
	<b><a class="link" href="localhost/project" onMouseOver="changeLinkColor(this,'#FE2EF7')" onMouseOut="changeLinkColor(this,'black')">Return to Project</a> | <a class="link" href="localhost/build-it-yourself" onMouseOver="changeLinkColor(this,'#FE2EF7')" onMouseOut="changeLinkColor(this,'black')">Build it Yourself</a> </b>
</div>

<br>

<table class="center-title" style="background-color:white;">
	<tr>
		<td><div id="Pbutton" class="menu" onClick= "DisplayPicture()">Overview</div></td>
	
		<td><div id="Abutton" class="menu" onClick= "DisplayApp()">Application</div></td>
		<td><div id="Ibutton" class="menu" onClick= "DisplayInstr()">Instructions</div></td>
	</tr>
</table>

<br>

<div id="info" class="center-smaller" style="width:1000px; height:600px; background-color:#CEF6F5;">

<?php
	$con=mysqli_connect("localhost","","","test");
	$temp = mysqli_query($con, "SELECT `name` FROM `module-index` WHERE `id` = " . $_GET["id"]); //get name of this module
	$fetch = mysqli_fetch_array($temp); //fetches the data and puts it into an array
	$name = $fetch['name'];
	echo "<p>Welcome to the module page for the ". $name ."! Click on a tab to get started!</p>";
	mysqli_close($con);

?>
</div>

<br>

<?php include("biy-footerlinks.html"); ?> 
<br>
<?php include("biy-bottom-navigation.html"); ?> 

</body>
</html>