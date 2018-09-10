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
        $query = "SELECT * FROM home_about2";
            $select_home1 = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_home1)){
            $h1_id = $row['h1_id'];
            $h1_title = $row['h1_title'];
            $h1_content = $row['h1_content'];
            $h1_image = $row['h1_image'];
                echo "<tr>";
        echo "<td>$h1_id</td>";
        echo "<td>$h1_title</td>";
        echo "<td>$h1_content</td>";
        echo "<td><img width='100' src='../images/$h1_image' alt='image'></td>";
        echo "<td><a href='homeabout2.php?source=edit_homeabout2&p_id={$h1_id}'>Edit</a></td>";
        
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>