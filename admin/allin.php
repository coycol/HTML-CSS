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

    <?php
        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }else {
            $source = '';
        }
        
        switch($source) {
            case'add_goallin';
                include "includes/add_goallin.php";
                    break;
                
                case'edit_goallin';
                include "includes/edit_goallin.php";
                    break;
                
                case'200';
                echo "Nice 200";
                    break;
                
            default:
                include "includes/view_goallin.php";
                break;
        }
        
        
        
        
        
        
        ?>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php  include "includes/footer.php"; ?>