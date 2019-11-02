<html>
<head>
 <meta charset="utf-8" />
 <title>Zadanie 3</title>
 <link rel="stylesheet" type="text/css" href="reset.css">
 <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<br><br><br>




<div class="wrap_zad">

<h1>Zadanie nr 3</h1>
<br/><br/><br/>



<?php

if(isset($_POST['start'], $_POST['r'], $_POST['n']))
{

		//przepisanie zmiennych dla ułatwienia
		$start=$_POST['start'];
		$r=$_POST['r'];
		$n=$_POST['n'];

		echo "<p>Wprowadzono, wszystkie wartości<br>...</p>";
		echo "<br><hr><br>";
	
$f=0;
$i=$start-$r;
do 
{
	$i = $i+$r;
	$f=$f+$i;
    echo "<span>$i, </span> ";
} while ($i <= $n-$r);

echo "<br><br><p>Suma liczb to: $f</p>";

echo '<br><a href="zad3.php"><u><p>Rozwiąż jeszcze raz</p></a></u>';
		
		
}
else
{
	echo "<u><p><a href='zad3.php'>Nie wprowadzono wszystkich wartości, wróć do formularza</a></p></u>";
}

?>


</div>












<a href="index.php"><div class="strona_glowna"">Strona główna</div></a>

</body>
</html>