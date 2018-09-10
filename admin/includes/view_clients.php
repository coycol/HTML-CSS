<table class="table table-bordered table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
           <?php 
        $query = "SELECT * FROM clients";
            $select_clients = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_clients)){
            $c_id = $row['c_id'];
            $c_title = $row['c_title'];
            $c_cat = $row['c_cat'];
            $c_image = $row['c_image'];
                echo "<tr>";
        echo "<td>$c_id</td>";
        echo "<td>$c_title</td>";
        echo "<td>$c_cat</td>";
        echo "<td><img width='100' src='../images/$c_image' alt='image'></td>";
        echo "<td><a href='clients.php?source=edit_clients&p_id={$c_id}'>Edit</a></td>";
        echo "<td><a href='clients.php?delete={$c_id}'>Delete</a></td>";
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){
    $the_client_id = $_GET['delete'];
    $query = "DELETE FROM clients WHERE c_id = $the_client_id ";
    $delete_query = mysqli_query($connection, $query);
}


?>
