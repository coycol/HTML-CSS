<?php include "db.php";?>
<h1 class="off">OFFICES</h1>
<h1 class="h1-offices">EMEA</h1>
<h1 class="h1-offices">AMERICAS</h1>
<h1 class="h1-offices">ASIA</h1>
<section>
<div class="row">
 
   <?php 
$query = "SELECT * FROM offices";
$select_all_offices_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_offices_query)){
            $off_title = $row['off_title'];
            $off_image = $row['off_image'];
            ?>
     
               <div class="column">
    <img src="images/color/<?php echo $off_image; ?>" alt="Snow" style="width:100%">
    <p class="c-desc"><?php echo $off_title; ?></p>
  </div>
<?php    }  ?>
  </section>
<!--
  <div class="column">
    <img src="images/color/Belgrade.png" alt="Forest" style="width:100%">
    <p class="c-desc">BELGRADE</p>
  </div>
  <div class="column">
    <img src="images/color/brussels.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">BRUSSELS</p>
  </div>
  <div class="column">
    <img src="images/color/bucharest.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">BUCHAREST</p>
  </div>
  <div class="column">
    <img src="images/color/dubai.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">DUBAI</p>
  </div>
  <div class="column">
    <img src="images/color/Hamburg.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">HAMBURG</p>
  </div>
  <div class="column">
    <img src="images/color/Istanbul.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">ISTANBUL</p>
  </div>
  <div class="column">
    <img src="images/color/london.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">LONDON</p>
  </div>
  <div class="column">
    <img src="images/color/madrid.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">MADRID</p>
  </div>
  <div class="column">
    <img src="images/color/milan.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">MILANO</p>
  </div>
  <div class="column">
    <img src="images/color/moscow.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">MOSCOW</p>
  </div>
  <div class="column">
    <img src="images/color/paris.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">PARIS</p>
  </div>
  <div class="column">
    <img src="images/color/riga.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">RIGA</p>
  </div>
    <div class="column">
    <img src="images/color/stockholm.jpg" alt="Mountains" style="width:100%">
    <p class="c-desc">STOCKHOLM</p>
  </div>
    
</div>
-->
    
<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5889.300251905133!2d19.26363389650563!3d42.43518161631876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134deb4450a2e0ed%3A0x23cd83f2bc81a8fc!2sDra%C4%8D%2C+Podgorica%2C+Montenegro!5e0!3m2!1sen!2s!4v1535312962031" width="400" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>