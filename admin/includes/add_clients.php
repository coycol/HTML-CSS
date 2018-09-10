<?php
if(isset($_POST['create_client'])) {
    
    $c_title = $_POST['c_title'];
    
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    
    
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    $query = "INSERT INTO clients(c_title, c_image)";
    $query .= "VALUES('{$c_title}','{$post_image}' ) ";
    
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
    
}
    
    
?>


<form action="" method="post" enctype="multipart/form-data">
<!--  Client Name  -->
       <div class="form-group">
        <label for="c_title">Client Name</label>
        <input type="text" class="form-control" name="c_title">
    </div>
<!--   ID  -->
       
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="create_client" value="Publish Client">  
    </div>
    
</form>