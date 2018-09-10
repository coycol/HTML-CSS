<?php  

if(isset($_GET['p_id'])){
    $get_home_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM home_about1 WHERE h_id = $get_home_id ";
            global $connection;
            $select_home_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_home_by_id)){
            $h_id = $row['h_id'];
            $h_title = $row['h_title'];
            $h_content = $row['h_content'];
            $h_image = $row['h_image'];
            }
if(isset($_POST['update_home'])){
    $h_title = $_POST['h_title'];
    $h_content = $_POST['h_content'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    if(empty($h_image)){
        $query = "SELECT * FROM home_about1 WHERE h_id = $get_home_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $h_image = $row['h_image'];
        }
    }
    
    $query = "UPDATE home_about1 SET ";
    $query .="h_title = '{$h_title}', ";
    $query .="h_content = '{$h_content}', ";
    $query .="h_image = '{$h_image}' ";
    $query .="WHERE h_id = {$get_home_id} ";
    
    $update_post =mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  BOX TITLE  -->
       <div class="form-group">
        <label for="h_title">HOME ABOUT TITLE 1</label>
        <input type="text" value="<?php echo $h_title; ?>" class="form-control" name="h_title">
    </div>
<!--   BOX CONTENT  -->
        <div class="form-group">
        <label for="h_content">HOME 1 CONTENT</label>
        <input type="text" value="<?php echo $h_content; ?>" class="form-control" name="h_content">
    </div>
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
       <img width="100" src="../images/<?php echo $h_image;?>" alt="">
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_home" value="UPDATE HOME1">  
    </div>
    
</form>