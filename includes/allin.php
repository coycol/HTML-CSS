<?php include "db.php";?>
<section class="allin">
<?php 
$query = "SELECT * FROM goallin";
$select_all_goallin_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_goallin_query)){
            $a_title = $row['a_title'];
            $a_image = $row['a_image'];
            $a_content = $row['a_content'];
            $a_content1 = $row['a_content1'];
        ?>
	<div class="allintext">
	<img class="goallin" src="images/<?php echo $a_image; ?>" alt="goallin">
		<h1><?php echo $a_title; ?></h1>
		<span><?php echo $a_content; ?></span>
		<span><?php echo $a_content1; ?></span>
<?php		}
		?>
</section>