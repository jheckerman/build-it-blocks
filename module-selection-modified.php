<!DOCTYPE html>
<html>
<head>
	<LINK href="../biy-stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<table style="margin:auto;" border="0">
		<?php
			include("db-connect.php");
			$cat = $_GET["cat"];
			$type = $_GET["type"];
			if ($cat==0){
				$data = mysqli_query($con, "SELECT * FROM `module_index`");
			}
			else{
				$data = mysqli_query($con, "SELECT * FROM `module_index` WHERE `subcategoryID`= $cat AND `type`= $type");
			}
			$i=0;
			$col=4; //number of columns
			while($info = mysqli_fetch_array( $data )){
				if($i% $col==0){ //new row if this is the 4th column
					echo "<tr>";
				}
				//note: on module page, the id variable will be used to pull data from the appropriate tables
				$link="build-it-blocks-module-page.php?id=" . $info['ID'];
				$temp = mysqli_query($con, "SELECT `icon` FROM `module_index` WHERE `id`=". $info['ID']); 
				$fetch = mysqli_fetch_array($temp); //fetches the data and puts it into an array
				$img = $fetch['icon'];
				echo "<td class='center-smaller' style='width:300px; height:150px;'> <a title= \"" .$info['description']. "\" href=$link><img src ='../" . $img . "'><br>" . $info['name'] . "</a>";
				echo "</td>";
				$i++;
				}
			if($i% $col==0){
				echo "</tr>";
			}
			mysqli_close($con);
		?>
	</table>
</body>
</html>