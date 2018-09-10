<?php
if(isset($_POST['create_offices'])) {
    
    $off_title = $_POST['off_title'];
    
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    
    
    move_uploaded_file($post_image_temp, "../images/color/$post_image");
    
    $query = "INSERT INTO offices(off_title, off_image)";
    $query .= "VALUES('{$off_title}','{$post_image}' ) ";
    
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
    
}
    
    
?>


<form action="" method="post" enctype="multipart/form-data">
<!--  Client Name  -->
       <div class="form-group">
        <label for="off_title">Office Name</label>
        <input type="text" class="form-control" name="off_title">
    </div>
<!--   ID  -->
       
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="create_offices" value="Publish Office">  
    </div>
    
</form>