<html>
<head>
 <meta charset="utf-8" />
 <title>Zadanie 4</title>
 <link rel="stylesheet" type="text/css" href="reset.css">
 <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<br><br><br>




<div class="wrap_zad">

<h1>Zadanie nr 4</h1>
<br/><br/><br/>



<?php

if(isset($_POST['start'], $_POST['q'], $_POST['n'])&& $_POST['n']>0)
{

		//przepisanie zmiennych dla ułatwienia
		$start=$_POST['start'];
		$q=$_POST['q'];
		$n=$_POST['n'];


//1 z początku tablicy, must be bo wywali się w pierwszej iteracji fora
 $tab[] = $start;
$suma=$start;

//for na ilość = $n
for($i=0;$i<=$n-2;$i++)
{
  //$tab[$i] zawsze będzie zawierało poprzednią wartość z tablicy i mnożymy są przez $q
  $tab[] = $tab[$i]*$q;
  $suma=($tab[$i]*$q)+$suma;
}

foreach ($tab as $w) {
	echo "<span>$w, </span>";
}

echo "<p>Suma ciągu geometrycznego to: $suma</p>";

	
}
else
{
	echo "<u><p><a href='zad4.php'>Nie wprowadzono wszystkich wartości, wróć do formularza</a></p></u>";
}

?>


</div>












<a href="index.php"><div class="strona_glowna"">Strona główna</div></a>

</body>
</html>