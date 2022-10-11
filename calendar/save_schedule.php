<?php 
    require_once('db-connect.php');

    if($_SERVER['REQUEST_METHOD'] !='POST'){
        echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
        $conn->close();
        exit;
    }

    extract($_POST);
    $allday = isset($allday);

    if(empty($id)){
        $sql = "insert into reservation_form (fname,lname,phone_number,reservation_date,type,amount,company_name,email_id,additional) values('$fname','$lname','$phone_number','$reservation_date','$type','$amount','$company_name','$email_id','$additional')";
    }else{
        $sql = "UPDATE `reservation_form` set `fname` = '{$fname}', `lname` = '{$lname}', `phone_number` = '{$phone_number}', `reservation_date` = '{$reservation_date}',`type` = '{$type}',`amount` = '{$amount}',`company_name` = '{$company_name}',`email_id` = '{$email_id}', `additional` = '{$additional}' where `id` = '{$id}'";
    }

    $save = $conn->query($sql);

    if($save){
        echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
    }else{
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    
    $conn->close();
?>