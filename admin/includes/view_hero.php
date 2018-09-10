<table class="table table-bordered table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
           
        </tr>
    </thead>
    <tbody>
           <?php 
        $query = "SELECT * FROM hero";
            $select_home = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($select_home)){
            $hero_id = $row['hero_id'];
            $hero_title = $row['hero_title'];
            $hero_content = $row['hero_content'];
            
                echo "<tr>";
        echo "<td>$hero_id</td>";
        echo "<td>$hero_title</td>";
        echo "<td>$hero_content</td>";
        
        echo "<td><a href='hero.php?source=edit_hero&p_id={$hero_id}'>Edit</a></td>";
        
                echo "</tr>";
        }      
        ?>
    </tbody>
</table>