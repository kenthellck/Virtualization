<!--HEADER PAGE-->
<?php include('../master/head2.php');?>
<!-- -->
<div class="container-default" style="min-height: 1027px;">

<div class="row">
	<div class="col-lg-12 col-md-12 titles" align="center">
      
      <h1>DataStore Alerts</h1>
     
    </div>
</div>
<div class="row">
  <div class="panel panel-widget">
    <?php

    ?>
    <?php  $i=0;
    foreach ($cursor as $document){
echo $i;

      $string = $document["description"];
      $tok = strtok($string, " \n\t");
      echo "tok is ".$tok;
      if ($tok == "DATASTORE_VMDASHBOARD"){


        ?>

        <div class="kode-alert kode-alert-icon alert4-light">
          <i class="fa fa-warning"></i>
          <p style="font-size:22px;">

            <?php echo"Alert  ::  $string"; ?></p>
        </div>

      <?php }


      elseif ($tok == "VM_TEAM_DASHBOARD_TEST"){


        ?>

        <div class="kode-alert kode-alert-icon alert2-light">
          <i class="fa fa-warning"></i><p style="font-size:22px;">

            <?php echo"Alert  ::  jk$string"; ?></p>
        </div>

      <?php }

      elseif ($tok == "HOST_VMDASHBOARD"){


        ?>

        <div class="kode-alert kode-alert-icon alert11-light">
          <i class="fa fa-warning"></i>
          <p style="font-size:22px;">

            <?php echo"Alert  ::  $string"; ?></p>
        </div>

      <?php }


      elseif ($tok == "HOST_CONNECTIVITY_DASHBOARD"){


        ?>

        <div class="kode-alert kode-alert-icon alert11-light">
          <i class="fa fa-warning"></i>
          <p style="font-size:22px;">

            <?php echo"Alert  ::  $string"; ?></p>
        </div>

      <?php }
$i++;



    } ?>

  </div>
</div>
</div>
<!--FOOTER PAGE-->
<?php include('../master/tail2.php');?>