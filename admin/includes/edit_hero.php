<?php  

if(isset($_GET['p_id'])){
    $get_hero_id = $_GET['p_id'];
    
}


$query = "SELECT * FROM hero WHERE hero_id = $get_hero_id ";
            global $connection;
            $select_hero_by_id = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_hero_by_id)){
            $hero_id = $row['hero_id'];
            $hero_title = $row['hero_title'];
            $hero_content = $row['hero_content'];
            
            }
if(isset($_POST['update_hero'])){
    $hero_title = $_POST['hero_title'];
    $hero_content = $_POST['hero_content'];
    
  
    
    $query = "UPDATE hero SET ";
    $query .="hero_title = '{$hero_title}', ";
    $query .="hero_content = '{$hero_content}', ";
    
    $query .="WHERE hero_id = {$get_hro_id} ";
    
    $update_post = mysqli_query($connection, $query);
    confirmQuery($update_post);
    
}



?>






<form action="" method="post" enctype="multipart/form-data">
<!--  HERO TITLE  -->
       <div class="form-group">
        <label for="hero_title">HERO TITLE</label>
        <input type="text" value="<?php echo $hero_title; ?>" class="form-control" name="hero_title">
    </div>
<!--   BOX CONTENT  -->
        <div class="form-group">
        <label for="hero_content">HERO CONTENT</label>
        <input type="text" value="<?php echo $hero_content; ?>" class="form-control" name="hero_content">
    </div>
<!--   Category   -->
      
<!--    IMAGE -->
   

    <div class="form-gorup">
        <input type="submit" class="btn btn-primary" name="update_hero" value="UPDATE HERO">  
    </div>
    
</form>