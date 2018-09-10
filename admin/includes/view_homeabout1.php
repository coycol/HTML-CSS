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
        $query = "SELECT * FROM home_about1";
            $select_home = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_home)){
            $h_id = $row['h_id'];
            $h_title = $row['h_title'];
            $h_content = $row['h_content'];
            $h_image = $row['h_image'];
                echo "<tr>";
        echo "<td>$h_id</td>";
        echo "<td>$h_title</td>";
        echo "<td>$h_content</td>";
        echo "<td><img width='100' src='../images/$h_image' alt='image'></td>";
        echo "<td><a href='homeabout1.php?source=edit_homeabout1&p_id={$h_id}'>Edit</a></td>";
        
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>