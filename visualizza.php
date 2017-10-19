<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Prova Inserimento valori</title>
</head>

<body>
<div class="jumbotron text-center">
<h1 style="color:Red">Modulo per visualizzare</h1>

<hr/>
  <a href="http://172.18.0.177/utente3/registrazione/" class="btn btn-info" role="button">Home</a>
  <a href="http://172.18.0.177/utente3/registrazione/register.php" class="btn btn-info" role="button">Registrazione</a>
  <a href="#" class="btn btn-info disabled" role="button">Visualizza utenti registrati</a>
<hr/>
	<?php 
	$file = fopen ("utenti.txt", "r");	
	while(!feof ($file)){
		$line= fgets($file);
		echo $line."<br />";
	}
	fclose ($file);
	
	$file2 = fopen ("posti.txt", "r");	
	while(!feof ($file2)){
		$line= fgets($file2);
		echo "Posti disponibili: ".$line."<br />";
	}
	fclose ($file2);
	?>
	</div>

<footer class="container-fluid text-center">
  <p>ITIS E. DIVINI INFORMATICA 5G</p>
  <p>Cingolani Federico e Rondini Matteo</p>
  <p>Telefono: 3665935222 Email: concerto_coda@divini.org</p>
</footer>
 </body>
 </html>
 
