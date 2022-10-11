<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_INDEX);

$fname=isset($_POST["fname"]) ? $_POST["fname"] : "";
$lname=isset($_POST["lname"]) ? $_POST["lname"] : "";
$phone_number=isset($_POST["phone_number"]) ? $_POST["phone_number"] : "";
$reservation_date=isset($_POST["reservation_date"]) ? $_POST["reservation_date"] : "";
$quantity_ton=isset($_POST["quantity_ton"]) ? $_POST["quantity_ton"] : "";
$company_name=isset($_POST["company_name"]) ? $_POST["company_name"] : "";
$email_id=isset($_POST["email_id"]) ? $_POST["email_id"] : "";
$additional=isset($_POST["additional"]) ? $_POST["additional"] : "";
//n�ill� lauseilla tarkistetaan onko lomakkeelta tullut sy�tteen� nimi ja arvosana//


//mik�li nimi ja arvosana ei saa sy�tett� ohjataan k�ytt�j� toiselle sivulle//

$con = new mysqli("localhost:3306", "root", "", "cool_finland");

if ($con->connect_error){
	die("Connection failed: ". $con->connect_error);
}

$sql = "insert into reservation_form (fname,lname,phone_number,reservation_date,quantity_ton,company_name,email_id,additional) values('$fname','$lname','$phone_number','$reservation_date','$quantity_ton','$company_name','$email_id','$additional')";

if ($con->query($sql) === TRUE) {
	echo header("Location:./success.html");
} else {
	echo "Error: ".$sql."<br>".$con->error;
}

$con->close();

?>