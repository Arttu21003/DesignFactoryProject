<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["username"])){
    header("Location:./SignUpForm/login.php");
    exit;
}
print "<h2>Welcome, ".$_SESSION["username"]."!</h2>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/contact-style.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include 'connection.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contat_Us</title>
</head>
<body>
    <?php include'C:\xampp\htdocs\DesignFactoryProject\Header&Footer\Header.html'; ?>
    <div class="banner">
        <div class="banner-bnr">CONTACT US</div>
    </div>
    <div class ="contact-main">
        <div class="info">
            <div class="info-tab">
                <img src="assets/img/phone.png" class="info-img">
                <p>PHONE</p>
                <p>+823648264<br>
                    +3275288428</p>
            </div>
            <div class="info-tab">
                <img src="assets/img/loc.png" class="info-img">
                <p>LOCATION</p>
                <p>Finland-Kiimassuontie 127, 30420 Forssa</p>
            </div>
            <div class="info-tab">
                <img src="assets/img/mail.png" class="info-img">
                <p>EMAIL</p>
                <p>cool.finland@gmail.com</p>
            </div>
        </div>
        <div class="form" >
            <p>IF YOU GOT ANY QUESTIONS PLEASE DO NOT HESITATE TO <br>SEND US A MESSAGE!</p>

            <form method='POST' action='contact.php'>
                <label>
                    <input type="text" id="name" placeholder="ENTER A NAME" class="input" name="name">
                </label>
                <label>
                    <input type="email" id="email" placeholder="EMAIL" class="input" name="email">
                </label>
                <label>
                    <input type="text" id="message" placeholder="YOUR MESSAGE" class="input" name="message">
                </label>
                <input   class="button" type="submit" value="SEND A MESSAGE" name="submit">
            </form>
        </div>
        <?php
  

            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $sql = "INSERT INTO `info`(`message_id`, `Name`, `Email`, `Message`) VALUES ('','$name','$email','$message')";

                if(mysqli_query($conn, $sql)){
    
                } else{
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }

                mysqli_close($conn);
    
            }
            

        ?>
    </div>
    <?php include 'C:\xampp\htdocs\DesignFactoryProject\Header&Footer\Footer.html'; ?>
</body>
</html>