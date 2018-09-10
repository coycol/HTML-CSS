<?php  

if(isset($_GET['p_id'])){
    $get_c_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM clients WHERE c_id = $get_c_id ";
            global $connection;
            $select_clients_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_clients_by_id)){
            $c_id = $row['c_id'];
            $c_title = $row['c_title'];
            $c_cat = $row['c_cat'];
            $c_image = $row['c_image'];
            }
if(isset($_POST['update_client'])){
    $c_title = $_POST['c_title'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    if(empty($c_image)){
        $query = "SELECT * FROM clients WHERE c_id = $get_c_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $c_image = $row['c_image'];
        }
    }
    
    $query = "UPDATE clients SET ";
    $query .="c_title = '{$c_title}', ";
    $query .="c_image = '{$c_image}' ";
    $query .="WHERE c_id = {$get_c_id} ";
    
    $update_post =mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  Client Name  -->
       <div class="form-group">
        <label for="c_title">Client Name</label>
        <input type="text" value="<?php echo $c_title; ?>" class="form-control" name="c_title">
    </div>
<!--   ID  -->
       
<!--   Category   -->
      
<!--    IMAGE -->
       <div class="form-group">
       <img width="100" src="../images/<?php echo $c_image;?>" alt="">
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_client" value="UPDATE Client">  
    </div>
    
</form>