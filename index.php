<?php
include_once("config.php");

$result = $db->users->find().pretty();
echo $result;
?>
