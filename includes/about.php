		
		</div>
</section>
<div class="container-left">
<?php
$query = "SELECT * FROM home_about1";
$select_all_homeabout1_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_homeabout1_query)){
            $h_title = $row['h_title'];
            $h_image = $row['h_image'];
            $h_content = $row['h_content'];
?>

<section class="home-about1">
	<div class="home-about-textbox1">
		<img src="images/<?php echo $h_image; ?>" alt="Snow" style="width:100%;">
		<h1><?php echo $h_title; ?></h1>
		<p><?php echo $h_content; ?></p>
	</div>
	</div>
	</section>
	<?php } ?>
	
	
	<div class="container-right">
<?php 
	$query = "SELECT * FROM home_about2";
$select_all_homeabout2_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_homeabout2_query)){
            $h1_title = $row['h1_title'];
            $h1_image = $row['h1_image'];
            $h1_content = $row['h1_content'];  ?>
	<section class="home-about2">
	<div class="home-about-textbox2">
	<img src="images/<?php echo $h1_image; ?>" alt="Snow" style="width:100%">
		<h1><?php echo $h1_title; ?></h1>
		<p> <?php echo $h1_content; ?></p>
	</div>
	</div>
</section>
</div>
<?php }  ?>