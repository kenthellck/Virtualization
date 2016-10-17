
<?php include '../mainHome/header.php';?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content" >

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title" align="center" style="font-size:29px;">Virtual Machines</h1>
        <ol class="breadcrumb">
            <li><a href="mainpage.php" style="font-size:19px;">back</a></li>

        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">

                <a href="vm.php" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                <a href="homePage.php" class="btn btn-light"><button type="button" class="btn btn-rounded btn-option3  btn-icon"><i class="fa fa-home"></i></button></a>


            </div>
        </div>
        <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->




    <!-- Start Project Stats 14 -->
    <div class="col-md-16 col-lg-16">
        <div class="panel panel-widget" >
            <div class="panel-title" ><p class="text-warning" style="font-size:19px;"><b>VM stats</b></p>
                <span class="label label-info"><?php   ?></span>
                <ul class="panel-tools">
                    <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>

                </ul>
            </div>

            <div class="panel-body table-responsive">

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td><p class="text-primary" style="font-size:19px;">vm Name </p></td>
                        <td><p class="text-primary" style="font-size:19px;">Memory</p></td>
                        <td><p class="text-primary" style="font-size:19px;">CPU</p></td>
                        <td><p class="text-primary" style="font-size:19px;">raised date</p></td>
                        <td><p class="text-primary" style="font-size:19px;">level</p></td>


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
    <!-- end Project Stats 14-->

    <!-- //////////////////////////////////////////////////////////////////////////// -->



<?php include '../mainHome/footer.php';?>