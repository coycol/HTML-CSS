<div class="footer-social-icons">
    <h4 class="_14"></h4>
    <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>

<?php
$query = "SELECT * FROM hero";
$select_all_hero_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_hero_query)){
            $hero_title = $row['hero_title'];
            $hero_content = $row['hero_content'];       
?>
<section class="home-hero">
	<div class="container"></div>
	<h1 class="title"><?php echo $hero_title; ?>
		<span><?php echo $hero_content; ?> </span></h1>
<?php  }		?>
		
		
<!-- Trigger/Open The Modal -->
<button id="myBtn" class="button button-accent">Zakazi Sastanak</button>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

     
     
     
     <?php 
       include "db.php";
    include "functions.php";
       createRows ();
   ?>
     <?php 
if(isset($_POST['submit'])){
    $to = "jelena.jankovic@amplitudo.me"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_last_name'];
    $phone_number = $_POST['phone_number'];
    
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_last_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
    
     <link rel="stylesheet" type="text/css" href="css/styles.css">
      <div class="col-sn-6">
       <img class="popup-logo" src="logo.png" alt="Golin"></img>
       
          <form action="includes/home-about.php" method="post" class="formaa" >
              <h2 class ="text-center">Zakazite sastanak sa nekim od nasih poslodavca</h2>
           <div class="form-group">
           <label for="first_last_name" >Ime i Prezime</label>
           <input type="text" name="first_last_name" class="form-control">
           
            <div class="form-group">
           <label for="company">Firma</label>
           <input type="text" name="company"  class="form-control">
        </div>
        <div class="form-group">
           <label for="email">e-Mail</label>
           <input type="text" name="email"  class="form-control">
        </div>
        <div class="form-group">
           <label for="phone_number">Broj telefona</label>
           <input type="text" name="phone_number"  class="form-control">
        </div>
        <div>
        <label for="party_time">Date/time:</label>
        <input type="date" id="party_time"
               name="party_time" value="2018-06-12"
               min="2018-06-07" max="2018-12-12" />
               
    </div>
       
       <input class="button1 button-accent1" type="submit" value="ZAKAZI" name="submit">
     
       </div>

       
    </div>

  </div>

</div>
<?php include "popup.php"  ?>


<!-- Display Popup Button -->
<!--		<a href="" id="popup" class="button button-accent" onclick="div_show()" >Zakazi Sastanak</a>-->
		
		

