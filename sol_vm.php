<!--HEADER PAGE-->
<?php include('master/head.php');?>
<?php include('dbconnect/sol.php');?>
<!-- -->
<div class="container-default" style="min-height: 1027px;">

<div class="row">
	<div class="col-lg-12 col-md-12 titles" align="center">
      
      <h1>Virtual Machines Alerts</h1>
     
    </div>
</div>
<div class="row">
<div class="col-md-12 col-lg-12">
      <div class="panel panel-widget">
        <div class="data-panel-title">
          ICD <span class="label label-info"> <?php echo $sol_vmcount ;?></span>
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
                <td>VM NAME</td>
                <td>Memory</td>
                <td>CPU</td>
                <td>Raised Date</td>
                <td>Level</td>
              </tr>
            </thead>
            <tbody>


            <?php
            $vmcount =0;
            foreach ($cursor as $document){
                ?>


                <tr>

                <?php
                $string = $document["title"];
                $tok = strtok($string, " \n\t");
                if ($tok == "VM_TEAM_DASHBOARD_TEST") {
                    $vmcount++;
                    while ($tok !== false) {?>


                        <?php

                        if ($tok == "-") {

                            $tok = strtok(" \n\t");
                            ?>

                            <td><h6><b><p style="font-size:19px;"><?php echo $tok; ?></p></b> </h6></td>

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

                                <td><h6><span class="label label-success" style="font-size:19px;"><?php echo $tok; ?></span> </h6></td>

                            <?php }

                            elseif($co>75 && $co<90){

                                ?>
                                <td><h6><span class="label label-warning" style="font-size:19px;"><?php echo $tok; ?></span> </h6></td>

                            <?php }

                            elseif( $co>=90){

                                ?>
                                <td><h6><span class="label label-danger" style="font-size:19px;"><?php echo $tok; ?></span> </h6></td>

                            <?php }

                            $tok = strtok(" \n\t");
                        }

                    }
                    ?>


                    <td><h6><p style="font-size:19px;"><?php  echo $document["date_raised"];?></p></h6></td>
                    <td><h6><p style="font-size:19px;"><?php  echo $document["category"];?></p></h6></td>


                    </tr>

                <?php  }
            }


            if($vmcount == 0)
            {
                ?>
                <!-- Start an Alert -->
                <div class="kode-alert kode-alert-icon alert1-light">
                    <a href="#" class="closed">&times;</a>
                    <h2 align="center">NO VIRTUAL MACHINE CONNECTIVITY ALERTS CURRENTLY!</h2>
                    <p align="center" class="text-danger"><b >Host connectivity Alert Count : 0</b></p>
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
<?php include('master/tail.php');?>