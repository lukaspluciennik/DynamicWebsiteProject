<?php

session_start();
if(file_exists("config/config.php")) require_once("config/config.php");
if(file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");

global $link;
$query1="SELECT cw5_users.u_id, cw5_users.active FROM cw5_users WHERE cw5_users.key='".$_GET[key]."'";


$wynik1=mysqli_query($link,$query1);
se($link);
if(mysqli_num_rows($wynik1)=='0'){
$activation="Użytkownik jest już aktywowany";
}
while($wiersz=mysqli_fetch_assoc($wynik1)){

if($wiersz[active]=='1'){
$activation="Użytkownik jest już aktywowany";
}
else{
$query2="UPDATE cw5_users SET cw5_users.active='1' WHERE cw5_users.u_id='$wiersz[u_id]'";
$wynik2=mysqli_query($link,$query2);
$query3 = "INSERT INTO acl VALUES ('','$wiersz[u_id]',3);";
$query4 = "INSERT INTO acl VALUES ('','$wiersz[u_id]',4);";
$wynik3=mysqli_query($link,$query3);
$wynik4=mysqli_query($link,$query4);
$query5="UPDATE cw5_users SET cw5_users.key = '' WHERE cw5_users.u_id='$wiersz[u_id]'";
$wynik5=mysqli_query($link,$query5);
se($link);
$activation="Aktywacja przebiegła pomyślnie. Teraz możesz się zalogować";

}
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1";
 

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title>Pro Mech Warsztat Samochodowy</title>

</head>

<body>

	<div class="panel-heading">
		<div class="alert alert-success">
      		<?php echo $activation; ?>
    	</div>
    	<button type="button" class="btn btn-success" onclick="window.location.href = 'glowna.php';">Przejdź do strony głównej</button>
	</div>
   
</body>

</html>
