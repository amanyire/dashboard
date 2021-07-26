<?php
  include("../../connect.php");
  session_start();
  
  //check if user is logged in
  if(isset($_SESSION['aid'])){
     $aid=$_SESSION['aid'];
     $sel=mysql_query("select * from account where aid='$aid'")or die(mysql_error());
	  $val=mysql_fetch_array($sel);
	  if(!$val){
	    //session_destroy();
        header("Location:../");
	  }else{
	    $myname=$val['name'];
	  }
  }else{
    //session_destroy();
    header("Location:../");
  }
  if(isset($_REQUEST['category'])){
    $_SESSION['category']=$_REQUEST['category'];
    header("Location:index.php");
  }elseif(!isset($_SESSION['category'])){
      $_SESSION['category']="slider";
      header("Location:index.php");
  }else{
    $category=$_SESSION['category'];
  }
  
  if(isset($_REQUEST['logout'])){
  session_destroy();
  header("Location:../");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eyeeza ICT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
   <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
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
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Eyeeza</b> ICT</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/defualt_user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $myname;?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="index.php"><i class="fa fa-link"></i> <span>VIEW PAGES</span> <i class="fa fa-angle-left pull-right"></i></a>        
        </li>
	<!--	 <li class="treeview">
          <a href="upload/"><i class="fa fa-link"></i> <span>UPLOAD PHOTOS</span> <i class="fa fa-angle-left pull-right"></i></a>                </li>-->
        <li><a href="?logout" ><i class="fa fa-link"></i> <span>Log out</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Eyeeza ICT
        <small>Website analytics</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
	
    <section class="content">
      <!-- Your Page Content Here -->
	  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php
			   $sel=mysql_query("select count(*) total from visitor ")or die(mysql_error());
  $val=mysql_fetch_array($sel); 
  $visit=$val['total'];
  echo $val['total'];
  ?></h3>
              <p>Total visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php
			   $selx=mysql_query("select sum(visits)  total from visitor ")or die(mysql_error());
  $valx=mysql_fetch_array($selx); 
  $tvisit=$valx['total'];
  echo $valx['total'];
  ?><sup style="font-size: 20px"></sup></h3>

              <p>Total visits</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php
			  $av=$tvisit/$visit;
  echo $av;
  ?></h3>

              <p>Average visits</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
			  <?php
			   $selx=mysql_query("select sum(clicks)  total from visitor ")or die(mysql_error());
  $valx=mysql_fetch_array($selx); 
  echo $valx['total'];
  ?></h3>

              <p>Total clicks</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
      </div>
	  
	  <div class="btn-group" style="width:100%">
	  <?php $sel=mysql_query("select distinct category from photo")or die(mysql_error());
	  while($val=mysql_fetch_array($sel)){
	  $ct= $val['category'];
	  ?>
          <a  href="?category=<?php echo $val['category'];?> " style="text-transform:uppercase; margin-bottom: 10px; margin-right: 10px"><button style="text-transform:uppercase; ; margin-bottom: 10px" type="button" class="btn btn-success"><?php 
		  if($ct=='black') echo "Black & White"; else echo str_replace("_", " ", $ct);
		  ?></button></a>
					  <?php } ?>
                    </div>
					<div class="row">
        <div class="col-xs-12">					
					<div class="box">
            <div class="box-header">
              <h3 class="box-title" style="font-size:large; text-transform:uppercase"> <?php 
			   echo str_replace("_", " ", $category);
			  ?> page Content</h3><br/>
<p style="text-align: center;">
<?php if( $category=="services" || $category=="works" || $category=="team" || $category=="slider"){ ?>
        <a class="btn btn-danger" href="#" onclick="add_new_content('<?php echo $category;?>')">ADD NEW ITEM</a></p>
        <?php } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          <div class="row" style="padding:0px;margin:0px">

<script type="text/javascript">
function replace_image(id,category){
  document.getElementById("overlay").style="visibility:visible";
  document.getElementById("image_change_div").innerHTML='<iframe src="upload/replace_image.php?photo_id='+id+'&&category='+category+'" style="border:none;min-height:100%;height:100%;padding:0px;margin:0px;"  width="100%" height="100%"></iframe>'; 
              }
              function close_overlay(){
              document.getElementById("overlay").style="visibility:invisible";
              }
               function delete_content(id){
  document.getElementById("overlay").style="visibility:visible";
  document.getElementById("image_change_div").innerHTML='<object width="100%" height="100%" type="text/html" data="delete.php?photo_id='+id+'" ></object>'; 
              }
              
              function edit_image_content(id,category){
  document.getElementById("overlay").style="visibility:visible";
  document.getElementById("image_change_div").innerHTML='<object width="100%" height="100%" type="text/html" data="edit_branches.php?photo_id='+id+'&&category='+category+'" ></object>'; 
              }


                function add_new_content(category){
  document.getElementById("overlay").style="visibility:visible";
  document.getElementById("image_change_div").innerHTML='<object width="100%" height="100%" type="text/html" data="add_item.php?category='+category+'" ></object>'; 
              }
              </script>


		 <?php 
		   $sel= mysql_query("select * from photo where category='$category' ")or die(mysql_error());
		   while($val=mysql_fetch_array($sel)){
			 //show last edited image
			 $photo_id=$val['photo_id'];							
							?>
<?php if($category!="slider" && $category!="works" && $category!="about" && $category!="our_school_tile" && $category!="services" && $category!="team" && $category!="projects" && $category!="our_clients" ){ ?>
<div class="col-md-12" style="border:1px solid #ccc;margin:5px">
<?php }else{ ?>
            <div class="col-md-3" style="border:1px solid #ccc;margin:5px">
<?php } ?>
              <div class="color-palette-set">
              <?php 
$file= '../../img/'.$category.'/thumb/'.$val['thumb_nail'];
if(file_exists($file) && $val['thumb_nail']!=""){ ?>
                <img src="<?php echo $file; ?>" width="100%" style="border:1px solid #999999; margin:5px; border-radius:5px; padding:2px" />
                <?php } ?>
                <div id="bdiv<?php echo $photo_id; ?>"><p align="center"> 
<?php if( $category=="home_tile" || $category=="works"  || $category=="join_us_tile" || $category=="learning_tile" || $category=="notice_board_tile" || $category=="team" || $category=="slider"){ ?>
                <a href="#" onClick="replace_image('<?php echo $photo_id;?>','<?php echo $category;?>')">Change Photo</a> | 
<?php } ?>

                <a href="#" onClick="edit_image_content('<?php echo $photo_id;?>','<?php echo $category;?>')">Edit Content</a>| 
                <a href="#" onClick="delete_content('<?php echo $photo_id;?>')" >Delete</a></p></div>
				<p align="center"><?php echo $val['title'];  ?></p>
				<p style="text-align: justify;"><?php echo $val['comment'];  ?></p>
        <?php $video_id=$val['video_id'];
          if($video_id!="none" && $video_id !=""){
         ?>
         <p><?php echo $video_id; ?></p>
        <hr/>
        <?php } ?>
              </div>
            </div>
			<?php } ?>
			<style type="text/css">
			#overlay {
    position: fixed;
	visibility:hidden;
    top: 0;
    left: 0;
    width: 100%;
    height: 90%;
    background-color: #000;
    opacity: 1;
    z-index: 10000;
}
#image_change_div{
margin:auto;
width:100%;
height:100%;
margin-top:10px;
overflow:visible;
}
			</style>
			<style type="text/css">
	::-webkit-scrollbar {
    width: 1px;
	}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.9); 
    border-radius: 1px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 1px;
    -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.9); 
}

	</style>
			<div id="overlay">
			<p style="text-align:center" onClick="close_overlay()"><a href="index.php">
			<i style="color:#ffffff; font-size:30px; margin-top:10px" class="fa fa-close"></i></a></p>
			<div id="image_change_div" style="background-color:#CCC"> </div>
			</div>
            <!-- /.col -->
           
          </div>
          <!-- /.row -->
          
          <!-- /.row -->
        </div>
            <!-- /.box-body -->
          </div>
		  </div>
		  </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    <a target="_blank" href="http://www.eyeeza.com">Eyeeza ICT</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a target="_blank" href="http://eyeeza.com/">Eyeeza ICT</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<!-- jQuery 2.2.0 ->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 ->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App ->
<script src="dist/js/app.min.js"></script>-->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
