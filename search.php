<?php

session_start();


if (file_exists("config/config.php")) require_once("config/config.php");
if (file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");

global $link;


$searchquery = trim($_POST['search_text']);


$query = "SELECT visit_table.*, cw5_user_profiles.imie, cw5_user_profiles.nazwisko  FROM visit_table JOIN cw5_user_profiles ON      visit_table.u_id=cw5_user_profiles.u_id WHERE data LIKE '%$searchquery%' OR imie LIKE '%$searchquery%' OR nazwisko LIKE '%$searchquery%' OR marka LIKE '%$searchquery%' OR model LIKE '%$searchquery%' OR visit_table.time LIKE '%$searchquery%'";

$wynik=mysqli_query($link,$query);
se($link);
if(mysqli_num_rows($wynik)<1){
?>
<div class="alert alert-warning">Brak wyników wyszukiwania.</div>
<?php

}
    else{


 ?>
<div class="alert alert-info">
<?php
                                                  

    echo "<table class=\"table\">\n";
	echo "<tr>\n";
	echo "<th></th><th>Termin wizyty</th><th>Godzina</th><th>Imię</th><th>Nazwisko</th><th>Opis</th><th>Marka</th><th>Model</th><th>Pojemność silnika</th><th>Moc silnika</th><th>Potwierdzona</th><th></th>\n";
	echo "</tr>\n";

}
while($wiersz = mysqli_fetch_assoc($wynik)){

        

       
	
        echo "<tr>\n";

		if($wiersz[active]==0){
			$potwierdzona = 'Nie';
			echo "<td><a class=\"btn btn-success\" href=\"?d=visitsemployee&w=accept_visit&v_id=".$wiersz[v_id]."\">Potwierdź wizytę</a>";
		}
		else{
			$potwierdzona = 'Tak';
			echo "<td><a class=\"btn btn-success disabled\" href=\"?d=visitsemployee&w=accept_visit&v_id=".$wiersz[v_id]."\">Potwierdź wizytę</a>";
		}

	
		echo "<a class=\"btn btn-\" href=\"?d=visitsemployee&w=add_repair&v_id=".$wiersz[v_id]."\">Wjazd na warsztat</a></td>

		<td>".$wiersz[data]."</td><td>".$wiersz[time]."</td><td>".$wiersz[imie]."</td><td>".$wiersz[nazwisko]."</td><td>".$wiersz[opis]."</td><td>".$wiersz[marka]."</td><td>".$wiersz[model]."</td><td>".$wiersz[pojemnosc]."</td><td>".$wiersz[moc]."</td><td>$potwierdzona</td>
		\n";
		echo "</tr>\n";  
      
	}
	echo "</table>\n";

?>
</div>
