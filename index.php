<!--HEADER PAGE-->
<?php include('master/head.php');?>
<?php include('dbconnect/icd.php');?>
<?php include('dbconnect/sol.php');?>
<!-- -->
<div class="container-default" style=height: 100%;">

<div class="row">
	<div class="col-lg-12 col-md-12 titles" align="center">
      
      <h1>Dashboard For Virtualization Alerts</h1>
     
    </div>

    <!-- ICD-->
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3><a href="ICD/index.php">ICD</a> </h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up"><?php echo$icd_vmcount;?></h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3><?php echo$icd_datastorecount;?></h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
    <!-- SOL-->
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3><a href="SOL/index.php">SOL</a> </h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up"><?php echo $sol_vmcount;?></h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3><?php echo $datastorecount;?></h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3>CORNEL</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up">696</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3>960</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3>ICD</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up">696</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3>960</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3>ICD</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up">696</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3>960</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3>ICD</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up">696</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3>960</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
    <div class="col-md-12">
        <ul class="topstats clearfix">
            <li class="arrow"></li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cubes"></i> V Centre</span>
                <h3>ICD</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-desktop fa-4x"></i> Host</span>
                <h3>8</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-cube"></i>VM</span>
                <h3 class="color-up">696</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-database"></i> Datastore</span>
                <h3>960</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-sort-amount-asc"></i> Host Connectivity</span>
                <h3 class="color-up">32</h3>

            </li>
            <li class="col-xs-6 col-lg-2">
                <span class="title"><i class="fa fa-signal"></i> Storage Connectivity</span>
                <h3 class="color-down">2</h3>

            </li>
        </ul>
        <br>
    </div>
</div>

<div class="row">

</div>
</div>
<!--FOOTER PAGE-->
<?php include('master/tail.php');?>