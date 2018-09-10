<table class="table table-bordered table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
           <?php 
        $query = "SELECT * FROM boxes";
            $select_boxes = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_boxes)){
            $box_id = $row['box_id'];
            $box_title = $row['box_title'];
            $box_content = $row['box_content'];
            $box_image = $row['box_image'];
                echo "<tr>";
        echo "<td>$box_id</td>";
        echo "<td>$box_title</td>";
        echo "<td>$box_content</td>";
        echo "<td><img width='100' src='../images/icons/$box_image' alt='image'></td>";
        echo "<td><a href='boxes.php?source=edit_boxes&p_id={$box_id}'>Edit</a></td>";
        echo "<td><a href='boxes.php?delete={$box_id}'>Delete</a></td>";
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){
    $the_boxes_id = $_GET['delete'];
    $query = "DELETE FROM boxes WHERE box_id = $the_boxes_id ";
    $delete_query = mysqli_query($connection, $query);
}


?>
