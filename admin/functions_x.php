<?php 
function confirmQuery($result){
    global $connection; 
    if(!$result){
        die("FAIL" . mysqli_error($connection));
    }
   
}
    
    
function insert_categories() {
    global $connection;
    if(isset($_POST ['submit'])){
                   $cat_title = $_POST['cat_title'];
                   if($cat_title == "" || empty($cat_title)){
                       echo "THIS FIELD SHOULD NOT BE EMPTY !";
                    
                   }
                   else {
                       $query = "INSERT INTO categories(cat_title) ";
                       $query .="VALUES('{$cat_title}') ";
                       $create_category_query = mysqli_query($connection, $query);
                       if (!$create_category_query){
                           die ('QUERY FAIL' . mysqli_error($connection));
                       }
                   }
               }
}

function findAllCategories () {
    global $connection;
    $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_categories)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
                   
            echo "<tr>";
            echo " <td>{$cat_id}</td>";
            echo " <td>{$cat_title}</td>";
            echo " <td><a href='add_category.php?delete={$cat_id}'>delete</a></td>";
            echo " <td><a href='add_category.php?edit={$cat_id}'>edit</a></td>";
            echo "<tr>";
        }    
}

function delete_categories (){
    global $connection;
    if(isset($_GET['delete'])){
                $the_cat_id = $_GET['delete'];
                   $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                   $delete_query = mysqli_query($connection, $query);
                   header("Location: add_category.php");
               }
}

?>