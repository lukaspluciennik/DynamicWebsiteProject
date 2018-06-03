<?php
session_start();
global $link;
if (file_exists("config/config.php")) require_once("config/config.php");
if (file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");



$query="INSERT INTO visit_table VALUES (NULL, '".$_SESSION[u_id]."', '".$_POST[data]."', '".$_POST[time]."', '".$_POST[opis]."', '".$_POST[marka]."', '".$_POST[model]."', '".$_POST[pojemnosc]."', '".$_POST[moc]."', '','0')";
// echo $query;
$wynik=mysqli_query($link,$query);
se($link);


header("Location: index.php"); 

?>
