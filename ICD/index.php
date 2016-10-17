<!--HEADER PAGE-->
<?php include('../master/head2.php');?>

<!-- -->
<div class="container-default" style="min-height: 1027px;">

<div class="row">
	<div class="col-lg-12 col-md-12 titles" align="center">
      
      <h1>SOL Alerts</h1>
     
    </div>


</div>

<div class="row">


    <!-- All Alerts -->
    <div class="col-md-6 col-lg-4">
        <div class="panel panel-primary">

            <div class="panels-title">
                <h2>All Alerts</h2>
                <ul class="panel-tools">
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>


            <div class="panels-body">
                <div class="panel-body table-responsive">

                    <table class="table table-hover">

                        <tbody>
                        <tr>
                            <td><h5>All the Alerts can be viewed in this sector</h5></td>
                            <td><a href="#" class="btn btn-host btns-lg">1</a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer"></div>

        </div>
    </div>
    <!-- Host -->
    <div class="col-md-6 col-lg-4">
        <div class="panel panel-danger">

            <div class="panels-title">
                <h2>Host Alerts</h2>
                <ul class="panel-tools">
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>


            <div class="panels-body">
                <div class="panel-body table-responsive">

                    <table class="table table-hover">

                        <tbody>
                        <tr>
                            <td><h5>All the Host Alerts can be viewed in this sector</h5></td>
                            <td><a href="#" class="btn btn-host btns-lg">1</a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer"></div>

        </div>
    </div>
    <!-- VM -->
    <div class="col-md-6 col-lg-4">
        <div class="panel panel-info">

            <div class="panels-title">
                <h2>VM Alerts</h2>
                <ul class="panel-tools">
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>


            <div class="panels-body">
                <div class="panel-body table-responsive">

                    <table class="table table-hover">

                        <tbody>
                        <tr>
                            <td><h5>All the VM Alerts can be viewed in this sector</h5></td>
                            <td><a href="icd_vm.php" class="btn btn-host btns-lg"><?php echo$icd_vmcount;?></a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer"></div>

        </div>
    </div>
    <!-- Datastore -->
    <div class="col-md-6 col-lg-4">
        <div class="panel panel-warning">

            <div class="panels-title">
                <h2>Datastore Alerts</h2>
                <ul class="panel-tools">
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>


            <div class="panels-body">
                <div class="panel-body table-responsive">

                    <table class="table table-hover">

                        <tbody>
                        <tr>
                            <td><h5>All the Datastore Alerts can be viewed in this sector</h5></td>
                            <td><a href="icd_ds.php" class="btn btn-host btns-lg"><?php echo $icd_datastorecount;?></a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer"></div>

        </div>
    </div>
    <!-- Host Connectivity -->
    <div class="col-md-6 col-lg-4">
        <div class="panel panel-success">

            <div class="panels-title">
                <h2>Host Connectivity Alerts</h2>
                <ul class="panel-tools">
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>


            <div class="panels-body">
                <div class="panel-body table-responsive">

                    <table class="table table-hover">

                        <tbody>
                        <tr>
                            <td><h5>All the Host Connectivity Alerts can be viewed in this sector</h5></td>
                            <td><a href="#" class="btn btn-host btns-lg">1</a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer"></div>

        </div>
    </div>
    <!-- Storage Connectivity -->
    <div class="col-md-6 col-lg-4">
        <div class="panel panel-primary">

            <div class="panels-title">
                <h2>Storage Connectivity Alerts</h2>
                <ul class="panel-tools">
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>


            <div class="panels-body">
                <div class="panel-body table-responsive">

                    <table class="table table-hover">

                        <tbody>
                        <tr>
                            <td><h5>All the Storage Connectivity Alerts can be viewed in this sector</h5></td>
                            <td><a href="#" class="btn btn-host btns-lg">1</a></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer"></div>

        </div>
    </div>


</div>
</div>
<!--FOOTER PAGE-->
<?php include('../master/tail2.php');?>