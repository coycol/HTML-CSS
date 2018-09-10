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
<!--    UPDATING PASSWORD OR USERNAME    -->

        
   <?php  
        include "includes/db.php";
     if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $hashF = "$2y$10$";
        $salt = "isthisokorineedtoput11";
        $hash_and_salt =  $hashF . $salt ;
        $password = crypt($password, $hash_and_salt);
        
    $query = "INSERT INTO  users(username,password)";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die ('QUERY FAILED' . MYSQLI_ERROR($connection));
        }
        else {
            echo "Created Successfully !";
        }
    }
        ?>
        
<!--  FORMA-->
   <div class="col-sn-6">
    <form action="profile_create.php" method="post" >
           <h1 class= "text-center">Create</h1>
           <div class="container-fluid">
           <label for="username">Username</label>
           <input type="text" name="username" class="form-control" ></div>
           
           <div class="container-fluid">
       <label for="password">Password</label>
           <input type="password" name="password"  class="form-control"></div>
           <div class="form-group">
               <input class="btn btn-primary" type="submit" value="CREATE" name ="submit">
        


        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php  include "includes/footer.php"; ?>