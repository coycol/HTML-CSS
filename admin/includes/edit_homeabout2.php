<?php  

if(isset($_GET['p_id'])){
    $get_home_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM home_about2 WHERE h1_id = $get_home_id ";
            global $connection;
            $select_home_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_home_by_id)){
            $h1_id = $row['h1_id'];
            $h1_title = $row['h1_title'];
            $h1_content = $row['h1_content'];
            $h1_image = $row['h1_image'];
            }
if(isset($_POST['update_home'])){
    $h1_title = $_POST['h1_title'];
    $h1_content = $_POST['h1_content'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    if(empty($h1_image)){
        $query = "SELECT * FROM home_about2 WHERE h1_id = $get_home_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $h1_image = $row['h1_image'];
        }
    }
    
    $query = "UPDATE home_about2 SET ";
    $query .="h1_title = '{$h1_title}', ";
    $query .="h1_content = '{$h1_content}', ";
    $query .="h1_image = '{$h1_image}' ";
    $query .="WHERE h1_id = {$get_home_id} ";
    
    $update_post =mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  BOX TITLE  -->
       <div class="form-group">
        <label for="h1_title">HOME ABOUT TITLE 2</label>
        <input type="text" value="<?php echo $h1_title; ?>" class="form-control" name="h1_title">
    </div>
<!--   BOX CONTENT  -->
        <div class="form-group">
        <label for="h1_content">HOME 2 CONTENT</label>
        <input type="text" value="<?php echo $h1_content; ?>" class="form-control" name="h1_content">
    </div>
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
       <img width="100" src="../images/<?php echo $h1_image;?>" alt="">
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_home" value="UPDATE HOME2">  
    </div>
    
</form>