<?php

$fname=isset($_POST["fname"]) ? $_POST["fname"] : "";
$lname=isset($_POST["lname"]) ? $_POST["lname"] : "";
$phone_number=isset($_POST["phone_number"]) ? $_POST["phone_number"] : "";
$reservation_date=isset($_POST["reservation_date"]) ? $_POST["reservation_date"] : "";
$reservation_time=isset($_POST["reservation_time"]) ? $_POST["reservation_time"] : "";
$quantity_ton=isset($_POST["quantity_ton"]) ? $_POST["quantity_ton"] : "";
$company_name=isset($_POST["company_name"]) ? $_POST["company_name"] : "";
$email_id=isset($_POST["email_id"]) ? $_POST["email_id"] : "";
$additional=isset($_POST["additional"]) ? $_POST["additional"] : "";

echo $fname."<br>".$lname."<br>".$phone_number."<br>" .$reservation_date."<br>".$reservation_time."<br>".$quantity_ton."<br>".$company_name."<br>".$email_id."<br>" .$additional."<br>";
?>