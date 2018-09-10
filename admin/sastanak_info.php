<?php include "includes/header.php" ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  
  <?php include "includes/main_header.php"?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include "includes/sidebar.php"?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome
        <small><?php echo $_SESSION ['username']; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <input type="text" id="date"
               name="date" />
               
               <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="CHECK">  
            </div>
        
        
        <?php 

    
    $connection = mysqli_connect('localhost', 'root', 'root', 'sastanak');
     global $connection;
    $query ="SELECT * FROM sastanak_info";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die ('QUERY FAILED' . MYSQLI_ERROR());   
    }
?>

  
       
   </form>
          <table class="table table-bordered table-hover" width="70%" cellpadding="5" cellspace="5" > 
               <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>COMPANY</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>TIME</td>
            </tr>
    
       <tr>
<!--   SASTANAK SHOW    -->
       <?php    
//        
//           if(isset($_POST['submit'])) {
//            $pt = 'date';
//            $query = "SELECT * FROM sastanak_info WHERE party_time = '{$pt}' ";
//           }
//            while ($row = mysqli_fetch_assoc($result)){
//            $id = $row['id'];
//            $first_last_name = $row['first_last_name'];
//            $company = $row['company'];
//            $email = $row['email'];
//            $phone_number = $row['phone_number'];
//            $party_time = $row['party_time'];
//        }
//           
           
           
           while ($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $first_last_name = $row['first_last_name'];
            $company = $row['company'];
            $email = $row['email'];
            $phone_number = $row['phone_number'];
            $party_time = $row['party_time'];
            
                   
            echo "<tr>";
            echo " <td>{$id}</td>";
            echo " <td>{$first_last_name}</td>";
            echo " <td>{$company}</td>";
            echo " <td>{$email}</td>";
            echo " <td>{$phone_number}</td>";
            echo " <td>{$party_time}</td>";
            
            echo " <td><a href='sastanak_info.php?delete={$id}'>delete</a></td>";
            echo "<tr>";
          
         ?>
<!-- DELETING SASTANAK REQUEST -->
            </tr>
           <?php 
               if(isset($_GET['delete'])){
                $the_id = $_GET['delete'];
                   $query = "DELETE FROM sastanak_info WHERE id = {$the_id} ";
                   $delete_query = mysqli_query($connection, $query);
                   header("Location: sastanak_info.php");
               }
               ?>
           
            <?php    
       }
  
       ?>  
   </table>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php  include "includes/footer.php"; ?>