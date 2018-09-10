<?php include "db.php"; ?>

<?php 

    
    // connections
    function allTheFunctions(){
    global $connection;
    $query ="SELECT * FROM sastanak_info";
    $result = mysqli_query($connection, $query);
    
}


// CREATE
function createRows (){
global $connection; 
    if(isset($_POST['submit'])) {
    $first_last_name = $_POST['first_last_name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $party_time = $_POST['party_time'];
    
    
        $first_last_name = mysqli_real_escape_string($connection, $first_last_name);
        $company = mysqli_real_escape_string($connection, $company);
         $email = mysqli_real_escape_string($connection, $email);
         $phone_number = mysqli_real_escape_string($connection, $phone_number);
         $party_time = mysqli_real_escape_string($connection, $party_time);
        
    
        
    $query = "INSERT INTO  sastanak_info(first_last_name,company,email,phone_number,party_time)";
    $query .= "VALUES ('$first_last_name', '$company', '$email', '$phone_number', '$party_time')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die ('QUERY FAILED' . MYSQLI_ERROR());
        }
        else {
            header ("Location: ../index.php");
        }
    }
}
?>