<h1>Aie (pas la tête)... encore une erreur !</h1>
<?php 
	echo 'Erreur '.$nContenuCode.': '.$nContenuMessage.'<br/>'
		.'<pre>fichier '.$nContenuFile.'</pre>'
		.'<pre>'.$nContenuTrace.'</pre>'
		.'<pre>exception lancée de la ligne '.$nContenuLine.'</pre>'; 
?>
