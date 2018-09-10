
<?php include "db.php";?>
 
    <h1 class="client-title">CLIENTS</h1>    
  <div class="row1">
  <?php 
$query = "SELECT * FROM clients";
$select_all_clients_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_clients_query)){
            $c_title = $row['c_title'];
            $c_image = $row['c_image'];
            ?>
               
               <div class="column1">
           <img src="images/<?php echo $c_image; ?>" alt="Snow" style="width:100%">
    <p class="c-desc1"> <?php echo $c_title; ?></p>
          
    
        </div>
         
    <?php  } ?>
</div>
<!--
  <div class="row1">
   <div class="column1">
    <img src="images/client1.png" alt="Snow" style="width:100%">
    <p class="c-desc1">MCDONALD'S: THESTRAW</p>
  </div>
  <div class="column1">
    <img src="images/client2.png" alt="Forest" style="width:100%">
    <p class="c-desc1">MCDONALD'S: FORK</p>
  </div>
  <div class="column1">
    <img src="images/client3.png" alt="Mountains" style="width:100%">
    <p class="c-desc">GUINNESS: MADE OF MORE</p>
  </div>
  <div class="column1">
    <img src="images/client4.png" alt="Mountains" style="width:100%">
    <p class="c-desc1">MAGNUM: MAGNUM X MOSCHINO</p>
  </div>
  <div class="column1">
    <img src="images/client5.png" alt="Mountains" style="width:100%">
    <p class="c-desc1">GULDEN'S:#DEFENDTHEDOG</p>
  </div>
  <div class="column1">
    <img src="images/client6.png" alt="Mountains" style="width:100%">
    <p class="c-desc1">TOBLERONE: THE TOBLERONE TAKE</p>
  </div>
  
-->
