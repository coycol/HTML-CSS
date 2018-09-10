<table class="table table-bordered table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
           <?php 
        $query = "SELECT * FROM offices";
            $select_offices = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_offices)){
            $off_id = $row['off_id'];
            $off_title = $row['off_title'];
            $off_image = $row['off_image'];
                echo "<tr>";
        echo "<td>$off_id</td>";
        echo "<td>$off_title</td>";
    
        echo "<td><img width='100' src='../images/color/$off_image' alt='image'></td>";
        echo "<td><a href='offices.php?source=edit_offices&p_id={$off_id}'>Edit</a></td>";
        echo "<td><a href='offices.php?delete={$off_id}'>Delete</a></td>";
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){
    $the_offices_id = $_GET['delete'];
    $query = "DELETE FROM offices WHERE off_id = $the_offices_id ";
    $delete_query = mysqli_query($connection, $query);
}


?>
