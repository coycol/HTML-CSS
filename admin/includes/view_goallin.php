<table class="table table-bordered table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
             <th>Content1</th>
        </tr>
    </thead>
    <tbody>
           <?php 
        $query = "SELECT * FROM goallin";
            $select_goallin = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_goallin)){
            $allin_id = $row['allin_id'];
            $a_title = $row['a_title'];
            $a_content = $row['a_content'];
            $a_image = $row['a_image'];
                $a_content1 = $row['a_content1'];
                echo "<tr>";
        echo "<td>$allin_id</td>";
        echo "<td>$a_title</td>";
        echo "<td>$a_content</td>";
                
        echo "<td><img width='100' src='../images/$a_image' alt='image'></td>";
                 echo "<td>$a_content1</td>";
        echo "<td><a href='allin.php?source=edit_goallin&p_id={$allin_id}'>Edit</a></td>";
        echo "<td><a href='allin.php?delete={$allin_id}'>Delete</a></td>";
               
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){
    $the_allin_id = $_GET['delete'];
    $query = "DELETE FROM goallin WHERE allin_id = $the_allin_id ";
    $delete_query = mysqli_query($connection, $query);
}


?>
