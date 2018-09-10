<?php  

if(isset($_GET['p_id'])){
    $get_box_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM boxes WHERE box_id = $get_box_id ";
            global $connection;
            $select_boxes_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_boxes_by_id)){
            $box_id = $row['box_id'];
            $box_title = $row['box_title'];
            $box_content = $row['box_content'];
            $box_image = $row['box_image'];
            }
if(isset($_POST['update_boxes'])){
    $box_title = $_POST['box_title'];
    $box_content = $_POST['box_content'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($post_image_temp, "../images/icons/$post_image");
    
    
    if(empty($box_image)){
        $query = "SELECT * FROM boxes WHERE box_id = $get_box_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $box_image = $row['box_image'];
        }
    }
    
    $query = "UPDATE boxes SET ";
    $query .="box_title = '{$box_title}', ";
    $query .="box_content = '{$box_content}', ";
    $query .="box_image = '{$box_image}' ";
    $query .="WHERE box_id = {$get_box_id} ";
    
    $update_post =mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  BOX TITLE  -->
       <div class="form-group">
        <label for="box_title">BOX TITLE</label>
        <input type="text" value="<?php echo $box_title; ?>" class="form-control" name="box_title">
    </div>
<!--   BOX CONTENT  -->
        <div class="form-group">
        <label for="box_content">BOX CONTENT</label>
        <input type="text" value="<?php echo $box_content; ?>" class="form-control" name="box_content">
    </div>
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
       <img width="100" src="../images/icons/<?php echo $box_image;?>" alt="">
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_boxes" value="UPDATE Boxes">  
    </div>
    
</form>