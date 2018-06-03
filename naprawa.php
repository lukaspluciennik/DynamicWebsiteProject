<?php
session_start();
global $link;
if (file_exists("config/config.php")) require_once("config/config.php");
if (file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");



$query="INSERT INTO repair_table VALUES (NULL, '".$_POST[v_id]."', '0', '".$_POST[koszt]."', '".$_POST[opis]."')";
//echo $query
$wynik=mysqli_query($link,$query);
se($link);
echo $query;


header("Location: index.php"); 

?>
