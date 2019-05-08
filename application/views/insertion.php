<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/back/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('assets/back/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url('assets/back/css/animate.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/back/css/style.css');?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url('assets/back/css/colors/default.css');?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">

<script>
function checkBoxFunction (Categorie) {
	var baliseChoix = document.getElementById(Categorie);
	baliseChoix.disabled = "false";
	
}
function checkBoxFunction2 (Categorie,Produit,select) {
	var baliseChoix = document.getElementById(Categorie);
    baliseChoix.disabled = "true";
   
    var id=document.getElementById(Produit);
    id.disabled ="false";
    //document.getElementById(select).disabled = "false";
	
}
</script>

    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
      
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/back/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/back/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/back/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url('assets/back/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/back/js/waves.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/back/js/custom.min.js');?>"></script>
    <script  type="text/javascript">
           
    </script>
</body>

</html>
