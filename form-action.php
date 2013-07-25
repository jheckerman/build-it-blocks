<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            echo $firstname . " " . $lastname;
            $con=mysqli_connect("localhost","","","test");
            //$query = "CREATE TABLE `2-instructions`(id INT NOT NULL AUTO_INCREMENT, img-src VARCHAR(50) NOT NULL, description VARCHAR(200) NOT NULL, large-img TINYINT(4) NOT NULL)";
            //echo $query;
            $query="CREATE TABLE `2-instructions`(`id` INT, `img-src` VARCHAR(50), `description` VARCHAR(200), `large-img` TINYINT(4))";
            //$query="CREATE TABLE `2-instructions`(FirstName VARCHAR(30),description VARCHAR(200),id INT)";
            $temp = mysqli_query($con, $query);
            if(! $temp ){
                die('Could not create table: ' . mysql_error());
            }
            $query = "ALTER TABLE `2-instructions` ADD PRIMARY KEY ( `id` )";
            $temp = mysqli_query($con, $query);
            $query = "ALTER TABLE `2-instructions` CHANGE `id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT ";
            $temp = mysqli_query($con, $query);
    ?>
</body>
</html>
