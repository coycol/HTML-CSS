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
    <!-- /.sidebar -->
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

          <!--       ADD CATEGORY FORM -->
           <div class="col-xs-6">
<!--     ADD MENU       -->
              <?php 
               insert_categories();
               ?>
<!-- ADD -->
        <form action="" method="post">
            <label for="cat_title">ADD MENU</label>
            <div class="form-group">
                <input class="form-control" type="text" name="cat_title">  
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="ADD MENU">  
            </div>
            
        </form>
<!--     UPDATE   -->
<?php if(isset($_GET['edit'])){
    $cat_id = $_GET['edit'];
    include "includes/update_categories.php";
}
   ?>
        
<!--    SHOW MENU TITLES   -->
         </div>
    <div class="col-xs-6">
          <table class="table table-bordered table-hover">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>MENU TITLE</th>
               </tr>
           </thead>
           <tbody>
            <?php 
            // SHOW CATEGORIES QUERY
            findAllCategories ();
              ?>
<!--       DELETE MENU        -->
               <?php 
               delete_categories ();
               ?>
           </tbody>
       </table>    
    </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php  include "includes/footer.php"; ?>