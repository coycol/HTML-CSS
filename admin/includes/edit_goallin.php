<?php  

if(isset($_GET['p_id'])){
    $get_allin_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM goallin WHERE allin_id = $get_allin_id ";
            global $connection;
            $select_goallin_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_goallin_by_id)){
            $allin_id = $row['allin_id'];
            $a_title = $row['a_title'];
            $a_content = $row['a_content'];
            $a_image = $row['a_image'];
            $a_content1 = $row['a_content1'];
            }
if(isset($_POST['update_goallin'])){
    $a_title = $_POST['a_title'];
    $a_content = $_POST['a_content'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
   $a_content1 = $_POST['a_content1'];
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    if(empty($a_image)){
        $query = "SELECT * FROM goallin WHERE allin_id = $get_allin_id ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $a_image = $row['a_image'];
        }
    }
    
    $query = "UPDATE goallin SET ";
    $query .="a_title = '{$a_title}', ";
    $query .="a_content = '{$a_content}', ";
    $query .="a_image = '{$a_image}' ";
    $query .="a_content1 = '{$a_content1}' ";
    $query .="WHERE allin_id = {$get_allin_id} ";
    
    $update_post =mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  allin title  -->
       <div class="form-group">
        <label for="a_title">GO ALL IN TITLE</label>
        <input type="text" value="<?php echo $a_title; ?>" class="form-control" name="a_title">
    </div>
<!--   Allin CONTENT 1 -->
        <div class="form-group">
        <label for="a_content">ALLIN CONTENT</label>
        <input type="text" value="<?php echo $a_content; ?>" class="form-control" name="a_content">
    </div>
<!--   allin content 2   -->
      <div class="form-group">
        <label for="a_content1">ALLIN CONTENT 2</label>
        <input type="text" value="<?php echo $a_content1; ?>" class="form-control" name="a_content1">
    </div>
<!--    IMAGE -->
       <div class="form-group">
       <img width="100" src="../images/<?php echo $a_image;?>" alt="">
        <input type="file" name="image">
    </div>
    

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_goallin" value="UPDATE goallin">  
    </div>
    
</form>