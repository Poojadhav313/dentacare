<?php

//echo "aaa";

$to = "greenpantry123@gmail.com";
$sub = "php";
$msg = "mail send using php";


$header = "header here";

$send = mail($to, $sub, $msg, $header);

echo($send ? "sent": error_get_last());

?>