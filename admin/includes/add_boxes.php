<?php
if(isset($_POST['create_boxes'])) {
    
    $box_title = $_POST['box_title'];
    $box_content = $_POST['box_content'];
    
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    
    
    move_uploaded_file($post_image_temp, "../images/icons/$post_image");
    
    $query = "INSERT INTO boxes(box_title, box_content, box_image)";
    $query .= "VALUES('{$box_title}','{$box_content}','{$post_image}' ) ";
    
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
    
}
    
    
?>


<form action="" method="post" enctype="multipart/form-data">
<!--  Client Name  -->
       <div class="form-group">
        <label for="box_title">BOX TITLE</label>
        <input type="text" class="form-control" name="box_title">
    </div>
<!--   BOX CONTENT  -->
       <div class="form-group">
        <label for="box_content">BOX CONTENT</label>
        <input type="text" class="form-control" name="box_content">
    </div>
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="create_boxes" value="Publish BOX">  
    </div>
    
</form>