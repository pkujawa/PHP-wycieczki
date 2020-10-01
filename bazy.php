<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<title> Biuro podrozy </title>
<link rel="stylesheet" href="styl.css" type="text/css" />
</head>
<body>
<form method = "POST" action="wynik.php">


<div id="header">
<center><img src = "logo1.png"></center>
<b>Biuro Podrozy</b>
</div>
<div id = "left">
<p> Prosze wybrac wycieczke:</p>
<?php
echo '<select name="kraj">';
echo '<option value="">Wybierz kraj</option>';
$link = mysqli_connect("127.0.0.1", "root", "") or die('B³¹d: Nie mo¿na po³¹czyæ z MySQL!');

mysqli_select_db($link, "wakacje") or die('B³¹d: Nie mo¿na wybra¿ bazy danych!');

$zapytanie = mysqli_query ($link, "SELECT * FROM wycieczki");

while($option = mysqli_fetch_assoc($zapytanie)) {

    echo '<option value="'.$option['kraj'].' ,'.$option['data'].' , '.$option['cena'].' zl">'.$option['kraj'].' '.$option['data'].' '.$option['cena'].' zl</option>';
}
echo '</select>';
?>
</div>
<div id = "content">
<p><b>Prosze wypelnic ponizszy formularz:</b></p> <br><br>
<p>Imie osoby rezerwujacej:</p>
<label>Imie</label> <input type="text" name="imie" /><br><br>
<p>Nazwisko osoby rezerwujacej:</p>
<label>Nazwisko</label> <input type="text" name="nazwisko" /><br><br>
<p>Ilosc miejsc do rezerwacji:</p>
<label>Liczba miejsc: </label> <input type="number" name="liczba"><br><br><br>
<button>Rezerwuj</button>
</div>
<div id ="footer">
Zapraszamy do kontaktu:
<a href="mailto:biuropodrozy@email.com"><b>biuropodrozy@email.com</b></a>
</div>
</form>
</body>
</html>