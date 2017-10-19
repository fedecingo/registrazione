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
	<h1 style="color:Red">Modulo per la registrazione</h1>
	<hr/>
	<a href="http://172.18.0.177/utente3/registrazione/" class="btn btn-info" role="button">Home</a>
	<a href="#" class="btn btn-info disabled" role="button">Registrazione</a>
	<a href="http://172.18.0.177/utente3/registrazione/visualizza.php" class="btn btn-info" role="button">Visualizza utenti registrati</a>
	<hr/>
   <div class="jumbotron text-left">
	<form action "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<font color="#f2f2f2">__</font>Nome: <input type="text" name="nome" size="20" />
	<br/>
	<font color="#f2f2f2">__</font>Cognome: <input type="text" name="cognome" size="20" />
	<br/>
	<font color="#f2f2f2">__</font>Email: <input type="text" name="email" size="30" />
	<br/>
	<font color="#f2f2f2">__</font>Telefono: <input type="text" name="telefono" size="20" />
	<br/>
	<font color="#f2f2f2">__</font><input type="submit" name="invio" value="Invia" />
	<input type="reset" name="cancella" value="Annulla" />
   </div>
</div>
	
	<?php 
	
	$file2 = fopen ("posti.txt", "r");
			while(!feof ($file2)){
			$line= fgets($file2);
			$somma=$line;
	}
	fclose ($file2);
	
	if((isset($_POST["invio"]))&&($somma>0)){
	$file = fopen ("utenti.txt", "a");	
	$nome =  $_POST["nome"];
	$cognome = $_POST["cognome"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	//Scrittura dei dati
	fwrite ($file, $nome.";".$cognome.";".$email.";".$telefono." \n");
	fclose ($file);
	
	$file2 = fopen ("posti.txt", "r");
			while(!feof ($file2)){
			$line= fgets($file2);
			$somma=$line;
			if($somma==50){
				$somma=50;
			}
			$somma=$somma-1;
	}
	fclose ($file2);
	
	$file2 = fopen ("posti.txt", "w");
		fwrite ($file2, $somma);
	fclose ($file2);
	}
	?>
 </body>
 </html>
 