
<!--DATA STORE ALERTS -->
<?php
$datastorecount =0;

foreach ($cursor as $document){

    $string = $document["title"];
    $tok = strtok($string, " \n\t");

    if ($tok == "DATASTORE_VMDASHBOARD") {
        $datastorecount++;
    }
}


?>
<!--VM STORE ALERTS -->
<?php
$sol_vmcount =0;

foreach ($cursor as $document){

    $string = $document["title"];
    $tok = strtok($string, " \n\t");

    if ($tok == "VM_TEAM_DASHBOARD_TEST") {
        $sol_vmcount++;
    }
}


?>



