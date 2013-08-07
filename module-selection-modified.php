<!DOCTYPE html>
<html>
<head>
	<LINK href="../biy-stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<table class="category-table">
		<?php
			//defining variables:
			$i=0;
			$col=4; //we have $col modules per row in the table
			
			include("db-connect.php"); //the db-connect.php file contains a single line that connects to the database
			$subcat = $_GET["cat"]; //take the subcategory: differs for every type
			$type = $_GET["type"]; // take the category/type of modules: 1 for Junk; 2 for LEGO; 3 for Art; 4 for Code; 5 for Minecraft
			if ($subcat==0){ //we say that the 0th subcategory is the "View All" view
				$data = mysqli_query($con, "SELECT * FROM `module_index` WHERE `type`= $type");
			}
			else{ //get all the modules for this category(type) and subcategory
				$data = mysqli_query($con, "SELECT * FROM `module_index` WHERE `subcategoryID`= $subcat AND `type`= $type");
			}
			while($info = mysqli_fetch_array( $data )){
				if(($i%$col)==0){ //go to a new row if this is the last column
					echo "<tr class=\"selection-row\">";
				}
				$link="build-it-blocks-module-page.php?id=" . $info['ID']; //used to tell the module page which module this is
				$temp = mysqli_query($con, "SELECT `icon` FROM `module_index` WHERE `id`=". $info['ID']); // gets all the icons for the filtered modules
				$fetch = mysqli_fetch_array($temp); //all the filtered modules' icons go to $fetch
				$img = $fetch['icon'];
				echo "<td class='center-smaller'> <a title= \"" .$info['description']. "\" href=$link><img width=\"150px\" src ='../" . $img . "'><br>" . $info['name'] . "</a>"; //outputs the HTML code for the icons layout
				echo "</td>";
				$i++;
				if(($i% $col)==0){ // if a new row should start with the next module, close the row
					echo "</tr>";
				}
			}
			if(($i% $col)!=0){ // if the last row hasn't been closed, close the row
					echo "</tr>";
				}
			mysqli_close($con);
		?>
	</table>
</body>
</html>