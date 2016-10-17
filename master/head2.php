<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Pearson">
  <meta name="keywords" content="Dashboard Pearson" />
    <meta http-equiv="refresh" content="15">
  <title>DashBoard</title>

  <!-- ========== Css Files ========== -->
  <link href="../bootstrap/css/root.css" rel="stylesheet">
  <link href="../bootstrap/css/myStyle.css" rel="stylesheet">
  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="../bootstrap/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.php" class="logo">Dashboard</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    

   

    <!-- Start Sidepanel Show-Hide Button -->
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

   

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<?php
$connection = new MongoClient( "mongodb://10.25.7.242:27017" ); // connect to a remote host (default port: 27017)


$db= $connection->vcenter;
$collection = $db->events;

$cursor = $collection->find();

?>
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN</li>
  <li><a href="../index.php"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <li><a href="#"><span class="icon color7"><i class="fa fa-desktop"></i></span>SOL<span class="caret"></span></a>
    <ul style="">
      <li><a href="../SOL/all_alerts.php"><span class="icon color5"><i class="fa fa-bullhorn"></i></span>All Alerts</a></li>
      <li><a href="../SOL/sol_host.php">HOST</a></li>
      <li><a href="../SOL/sol_vm.php">VM</a></li>
      <li><a href="../SOL/sol_ds.php">Data Store</a></li>
      <li><a href="../SOL/sol_hc.php">Host Connectivity</a></li>
      <li><a href="../SOL/sol_sc.php">Storage Connectivity</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color5"><i class="fa fa-desktop"></i></span>ICD<span class="caret"></span></a>
    <ul style="">
      <li><a href="../ICD/all_alerts.php"><span class="icon color5"><i class="fa fa-bullhorn"></i></span>All Alerts</a></li>
      <li><a href="../ICD/icd_host.php">HOST</a></li>
      <li><a href="../ICD/icd_vm.php">VM</a></li>
      <li><a href="../ICD/icd_ds.php">Data Store</a></li>
      <li><a href="../ICD/icd_hc.php">Host Connectivity</a></li>
      <li><a href="../ICD/icd_sc.php">Storage Connectivity</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color7"><i class="fa fa-desktop"></i></span>Cornel<span class="caret"></span></a>
    <ul style="">
      <li><a href="../CORE/all_alerts.php"><span class="icon color5"><i class="fa fa-bullhorn"></i></span>All Alerts</a></li>
      <li><a href="../CORE/sol_host.php">HOST</a></li>
      <li><a href="../CORE/sol_vm.php">VM</a></li>
      <li><a href="../CORE/sol_ds.php">Data Store</a></li>
      <li><a href="../CORE/sol_hc.php">Host Connectivity</a></li>
      <li><a href="../CORE/sol_sc.php">Storage Connectivity</a></li>
    </ul>
  </li>

</div>
  <?php include('../dbconnect/icd.php');?>
  <?php include('../dbconnect/sol.php');?>
 <div class="content" >