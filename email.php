<?php
$name=$_POST["name"];
$email=$_POST["email"];

$command = "echo  \"";
$command .=$name;
$command .=": ";
$command .=$email;
$command .="\"";
$command .=" >> ";
$command .=" ./email/email.txt ";


exec($command);


include "danke.php"


?>