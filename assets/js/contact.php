<?php

if (isset($_POST{'submit'})){
$name = $_POST{'name'};  
$mailform = $_POST{'mail'};        
$message = $_POST{'message'};   

$mailTo = "info@evantio.com";
$mailform = "From:  ".$mailFrom;
$text = " You have a message ".$name"./n/n".$message;

mail($mailTo, $name, $txt, $headers);

header("location:index.html?MessageSent");






}



?>