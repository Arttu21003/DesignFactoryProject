<?php

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
try{
    $yhteys=mysqli_connect("localhost:3306", "root", "", "cool_test");
}
catch(Exception $e){
    print("Error");
    exit;
}

?>