

<?php
session_start();
if (file_exists("config/config.php")) require_once("config/config.php");
if (file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");



$query="SELECT u_id, login FROM cw5_users WHERE login='".$_POST[login]."' AND password='".$_POST[password]."' AND active=1";
$wynik=mysqli_query($link,$query);
se($link);
#echo $query;


while($wiersz = mysqli_fetch_assoc($wynik))
{
	$_SESSION[u_id]=$wiersz[u_id];
	$_SESSION[login]=$wiersz[login];


}


if($_SESSION[login]) header("location:glowna.php");
else {
    header("location:glowna.php"); 
    
}
?>

