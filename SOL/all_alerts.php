<!--HEADER PAGE-->
<?php include('master/head.php');?>
<?php include('dbconnect/sol.php');?>
<!-- -->
<div class="container-default" style="min-height: 1027px;">

<div class="row">
	<div class="col-lg-12 col-md-12 titles" align="center">
      
      <h1>DataStore Alerts</h1>
     
    </div>
</div>
<div class="row">
<div class="col-md-12 col-lg-12">
      <div class="panel panel-widget">
        <div class="data-panel-title">
          All Alerts <span class="label label-info"> <?php echo $datastorecount;?></span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">

        </div>

        <div class="panel-body table-responsive">

          <table class="tables3 table-hover">
            <thead>
              <tr>
                <td>Alert</td>
                <td align="center">Status</td>

              </tr>
            </thead>
            <tbody>

            <tr>
              <td>dsdsdsdsd</td>
              <td align="center">
              <div class="easypie margin-b-50" data-percent="45"><span>45%</span>Storage<canvas height="110" width="110"></canvas></div>
              </td>
            </tr>

            </tbody>
          </table>

        </div>
      </div>
    </div>
</div>
</div>
<!--FOOTER PAGE-->
<?php include('master/tail.php');?>