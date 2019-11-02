
<html>
<head>
 <meta charset="utf-8" />
 <title>Zadanie 1</title>
 <link rel="stylesheet" type="text/css" href="reset.css">
 <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<br/><br/><br/>



<div class="wrap_zad">

<h1>Zadanie nr 1</h1>
<br/><br/><br/>

<!-         ax2+bx+c=0           ->



<?php




if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
	{
		print("<p>Rozwiązanie równania kwadratowego: <p>");
		$a=$_POST["a"];
		$b=$_POST["b"];
		$c=$_POST["c"];
		$delta=$b*$b-4*$a*$c;
		if($delta>0)
		{
			$x1=(-$b-sqrt($delta))/2/$a;
			$x2=(-$b+sqrt($delta))/2/$a;
			print("<p>Równanie ma dwa pierwiastki</p><br>");
			print("<p>x1=$x1</p>"."<br>");
			print("<p>x2=$x2</p>"."<br>");
		}
		else
		{
			if($delta==0)
			{
				$x12=-$b/(2*$a);
				print("<p>Równanie ma jeden pierwiastek</p><br>");
				print("x12=$x12<br>");
			}
			else
			{
				print("<p>Równanie nie ma pierwiastków rzeczywistych</p><br>");
			}
		}
		
	}
else
	{
	}







echo '<br><a href="zad1.php"><u><p>Rozwiąż jeszcze raz</p></a></u>';





?>









</div>


















<a href="index.php"><div class="strona_glowna"">Strona główna</div></a>










</body>
</html>