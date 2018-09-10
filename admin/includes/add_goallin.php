<?php
if(isset($_POST['create_goallin'])) {
    
    $a_title = $_POST['a_title'];
    $a_content = $_POST['a_content'];
    
    
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
      $a_content1 = $_POST['a_content1'];
    
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    $query = "INSERT INTO goallin(a_title, a_content, a_image,a_content1)";
    $query .= "VALUES('{$a_title}','{$a_content}','{$post_image}','{$a_content1}' ) ";
    
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
    
}
    
    
?>


<form action="" method="post" enctype="multipart/form-data">
<!--  GOALLIN  TITLE   -->
       <div class="form-group">
        <label for="a_title">ALLIN TITLE</label>
        <input type="text" class="form-control" name="a_title">
    </div>
<!--   GOALLIN CONTENT 1  -->
       <div class="form-group">
        <label for="a_content">ALLIN CONTENT 1</label>
        <input type="text" class="form-control" name="a_content">
    </div>
<!--   OALLIN CONTENT 2   -->
      <div class="form-group">
        <label for="a_content1">ALLIN CONTENT 2</label>
        <input type="text" class="form-control" name="a_content1">
    </div>
<!--    IMAGE -->
       <div class="form-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="create_goallin" value="Publish goallin">  
    </div>
    
</form>