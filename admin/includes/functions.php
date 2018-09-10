<?php include "db.php"?>
<?php 

    
    // connections
    function allTheFunctions(){
    global $connection;
    $query ="SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die ('QUERY FAILED' . MYSQLI_ERROR()); 
    }
    while($row= mysqli_fetch_assoc($result)){
    $id = $row['id'];
        $username = $row['username'];
        
    echo "<option value='$username'>$username</option>";
    }
    

}



?>