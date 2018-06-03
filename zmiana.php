<?php

session_start();

if (file_exists("config/config.php")) require_once("config/config.php");
if (file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");



$query="UPDATE cw5_users SET login='".$_POST[login]."', password='".$_POST[password]."', email='".$_POST[email]."' WHERE cw5_users.u_id='".$_POST[u_id]."'";
$query2="UPDATE cw5_user_profiles SET imie='".$_POST[imie]."', nazwisko='".$_POST[nazwisko]."', email='".$_POST[email]."' WHERE cw5_user_profiles.u_id='".$_POST[u_id]."'"; 
//echo $query;
//echo $query2;

$wynik=mysqli_query($link,$query);
$wynik2=mysqli_query($link,$query2);
se($link);



while($wiersz = mysqli_fetch_assoc($wynik))
{
	$_SESSION[user_id]=$wiersz[user_id];
	$_SESSION[login]=$wiersz[login];
	
}

header("Location: index.php"); 

?>
