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
<div class="col-md-12 col-lg-12">
      <div class="panel panel-widget">
        <div class="data-panel-title">
          ICD <span class="label label-info"> <?php echo $datastorecount;?></span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="tables table-hover">
            <thead>
              <tr>
                <td>DATASTORE NAME</td>
                <td>DISK USAGE</td>
                <td>RAISED DATE</td>
                <td>LEVEL</td>
              </tr>
            </thead>
            <tbody>

            <?php
            $datastorecount =0;
            foreach ($cursor as $document){


              ?>


              <tr>

              <?php
              $string = $document["title"];

              $tok = strtok($string, " \n\t");
              if ($tok == "DATASTORE_VMDASHBOARD") {


                $datastorecount++;
                while ($tok !== false) {?>


                  <?php

                  if ($tok == "-") {

                    $tok = strtok(" \n\t");

                    ?>

                    <td><h6><?php echo $tok; ?></h6></td>

                    <?php
                  }
                  $tok = strtok(" \n\t");

                  ?>

                  <?php
                }
                ?>




                <?php
                $string = $document["description"];


                $tok = strtok($string, " \n\t");

                while ($tok !== false) {


                  $tok = strtok(" \n\t");



                  if ($tok == "=") {
                    $tok = strtok(" \n\t");


                    $c=$tok;
                    $co=(int)$c;

                    if($co<75){

                      ?>
                      <td><h6 ><span class="label label-success"><?php echo $tok; ?></span> </h6></td>

                    <?php }

                    elseif($co>75 && $co<=85){

                      ?>
                      <td><h6><span class="label label-warning"><?php echo $tok; ?></span> </h6></td>

                    <?php }

                    elseif( $co>85){

                      ?>
                      <td><h6><span class="label label-danger"><?php echo $tok; ?></span> </h6></td>

                    <?php }
                  }

                }
                ?>








                <td><h6><?php  echo $document["date_raised"];?></h6></td>
                <td><h6><?php  echo $document["category"];?></h6></td>


                </tr>

              <?php  }
            }


            if($datastorecount == 0)
            {
              ?>
              <!-- Start an Alert -->
              <div class="kode-alert kode-alert-icon alert1-light">
                <a href="#" class="closed">&times;</a>
                <h2 align="center">NO DATASTORE ALERTS CURRENTLY!</h2>
                <p align="center" class="text-danger"><b>Datastore Alert Count : 0</p></b>
              </div>
              <!-- End an Alert -->
              <?php
            }

            ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>
</div>
</div>
<!--FOOTER PAGE-->
<?php include('../master/tail2.php');?>