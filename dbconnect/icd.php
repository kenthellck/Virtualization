
<!--DATA STORE ALERTS -->
<?php
$icd_datastorecount =0;

foreach ($cursor as $document){

    $string = $document["title"];
    $tok = strtok($string, " \n\t");

    if ($tok == "ICD_DATASTORE") {
        $icd_datastorecount++;
    }
}


?>
<!--VM STORE ALERTS -->
<?php
$icd_vmcount =0;

foreach ($cursor as $document){

    $string = $document["title"];

    $tok = strtok($string, " \n\t");

    if ($tok == "ICD_VM_TEAM_DASHBOARD_TEST") {
        $icd_vmcount++;
    }
}


?>



