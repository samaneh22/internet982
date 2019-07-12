<?php
include("CONNECT.php");
$fname=strip_tags($_POST["fname"]);
$lname=strip_tags($_POST["lname"]);
$email=strip_tags($_POST["email"]);
$q=mysql_query("INSERT INTO `myTable` (`firstname`,`lastname`,`emailaddress`) VALUES ('$fname','$lname'.'$email')");
if ($q){
    echo "با موفقیت ثبت شد !";
}else {
    echo "خطایی رخ داده است !";
}

?>
