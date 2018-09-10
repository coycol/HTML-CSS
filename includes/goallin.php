<?php include "db.php";?>
<section class="boxes"> 
 <?php $query = "SELECT * FROM boxes";
$select_all_boxes_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_boxes_query)){
            $box_title = $row['box_title'];
            $box_image = $row['box_image'];
            $box_content = $row['box_content'];  
             ?>
            <div class="transbox">
   <img src="images/icons/<?php echo $box_image; ?>" alt="signs">
    <h1> <?php echo $box_title; ?></h1>
    <p><?php echo $box_content; ?></p>
  </div>
    <?php  } 
                ?>
</section>