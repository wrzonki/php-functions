<html>
<head>
 <meta charset="utf-8" />
 <title>Zadanie 1</title>
 <link rel="stylesheet" type="text/css" href="reset.css">
 <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<br><br><br>




<div class="wrap_zad">

<h1>Zadanie nr 2</h1>
<br/><br/><br/>




<?php
//Sprawdzenie czy są wszystkie dane
if(isset($_POST['ax'], $_POST['ay'], $_POST['bx'], $_POST['by'], $_POST['cx'], $_POST['cy']))
{

		//przepisanie zmiennych dla ułatwienia
		$xa=$_POST['ax'];
		$ya=$_POST['ay'];
		$xb=$_POST['bx'];
		$yb=$_POST['by'];
		$xc=$_POST['cx'];
		$yc=$_POST['cy'];
		echo "<p>Wprowadzono, wszystkie wartości<br>...</p>";

echo"<br><hr><br>";
echo "<p>Krok 1 --> Sprawdzenie czy trójkąt istnieje poprzez długość boków:<br></p>";


$AB=sqrt(pow(($xb-$xa),2)+pow(($yb-$ya),2));
echo "<br><p>Długość odcinka AB wynosi $AB</p>";
$AC=sqrt(pow(($xc-$xa),2)+pow(($yc-$ya),2));
echo "<br><p>Długość odcinka AC wynosi $AC</p>";
$BC=sqrt(pow(($xc-$xb),2)+pow(($yc-$yb),2));
echo "<br><p>Długość odcinka BC wynosi $BC</p>";

if(($AB+$BC>$AC)&&($BC+$AC>$AB)&&($AC+$AB>$BC)){
	echo "<p><br>To może być trójkąt</p>";
}
else
{
	echo "<br><p>To nie może być trójkąt</p>";
	
}


echo"<br><hr><br>";
echo "<p>Krok 2 --> Sprawdzenie czy trójkąt istnieje poprzez liczenie pola obliczonych już boków<br></p>";

		$p=($AB+$AC+$BC)/2;
		$Pole=sqrt($p*(($p-$AB)*($p-$AC)*($p-$BC)));
		if($Pole>0)
		{
			echo "<br><p>Trójkąt istnieje ---->Pole trójkąta = $Pole</p>";
		}
		else
		{
			echo "<br><p>To nie może być trójkąt</p>";
			echo "<br><u><p><a href='zad2.php'>Rozwiąż jeszcze raz</p></a></u>";
		}

}

else
{
echo "<u><p><a href='zad2.php'>Nie wprowadzono wszystkich wartości, wróć do formularza</a></p></u>";
}
//Pole trójkąta abc











?>

</div>




<a href="index.php"><div class="strona_glowna"">Strona główna</div></a>

</body>
</html>