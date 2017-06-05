<?php
require("config.php");



$name = strtolower($_POST['name']);
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$mail = strtolower($_POST['mail']);
$date = date('Y-m-d');



if (empty($name)) {
$error .= "<li>Podaj nick</li>";
}
if (empty($pass1)) {
$error .= "<li>Podaj hasło</li>";
}
if (empty($pass2)) {
$error .= "<li>Powtórz hasło</li>";
}
if (empty($mail)) {
$error .= "<li>Podaj adres e-mail</li>";
}

$sql = "SELECT user_id FROM user WHERE user_name = '" . $name . "'";
$result = mysql_query($sql) or die(mysql_error());
$msr = mysql_num_rows($result);

if($msr > 0) {
$error .= "<li>Taki użytkownik już istnieje</li>";
}

$sql = "SELECT user_id FROM user WHERE user_email = '" . $mail . "'";
$result = mysql_query($sql) or die(mysql_error());
$msr = mysql_num_rows($result);

if($msr > 0) {
$error .= "<li>Jakiś użytkownik już wykorzystał ten adres e-mail</li>";
}

if(!empty($error)){
header("location:register.php?error=$error");
}


if ($pass2 != $pass1) {
$error .= "<li>Podane hasła różnią się!</li>";
header("location:register.php?error=$error");
}

if (empty($error)) {
$pass = md5($pass1);
$sql = "INSERT INTO user (user_name, user_pass, user_email, user_date)
				VALUES ('$name', '$pass', '$mail', '$date')";
$result = mysql_query($sql) or die(mysql_error());
header("location:index.php?wykonano=yes");
}


?>
