<?php  

if(isset($_GET['p_id'])){
    $get_off_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM offices WHERE off_id = $get_off_id ";
            global $connection;
            $select_offices_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_offices_by_id)){
            $off_id = $row['off_id'];
            $off_title = $row['off_title'];
    
            $off_image = $row['off_image'];
            }
if(isset($_POST['update_offices'])){
    $off_title = $_POST['off_title'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($post_image_temp, "../images/color/$post_image");
    
    
    if(empty($off_image)){
        $query = "SELECT * FROM offices WHERE off_id = $get_off_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $off_image = $row['off_image'];
        }
    }
    
    $query = "UPDATE offices SET ";
    $query .="off_title = '{$off_title}', ";
    $query .="off_image = '{$off_image}' ";
    $query .="WHERE off_id = {$get_off_id} ";
    
    $update_post =mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  Client Name  -->
       <div class="form-group">
        <label for="off_title">Office Name</label>
        <input type="text" value="<?php echo $off_title; ?>" class="form-control" name="off_title">
    </div>
<!--   ID  -->
       
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
       <img width="100" src="../images/color/<?php echo $off_image;?>" alt="">
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_offices" value="UPDATE Office">  
    </div>
    
</form>