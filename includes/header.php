<?php include "db.php" ?>


<!DOCTYPE html>
<html>
<head>
	<title>Golin</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<header>
	<img class="logo" src="logo.png" alt="Golin"></img>
<nav>
	<ul>
	
	<?php 
        $query = "SELECT * FROM categories";
        $select_all_categories_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_categories_query)){
            $cat_title = $row['cat_title'];
            echo "<li><a href='#'>{$cat_title}</a></li>";
        }
        ?>
	
	
<!--
		<li><a href="">PR AND COMMUNICATIONS</a></li>
		<li><a href="">EVENT MANAGMENT</a></li>
		<li><a href="">CLIENTS</a></li>
		<li><a href="">ABOUT</a></li>
		<li><a href="">OFFICES</a></li>
		<li><a href="login.php">ADMIN</a></li>
-->
	<li><a href="login.php">ADMIN</a></li>	
	</ul>
</nav>
</header>