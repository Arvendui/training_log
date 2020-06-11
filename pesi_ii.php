<!DOCTYPE html>
<?php
$myfile = $_POST['hiddenfilename'];
echo 'my file is'; echo $myfile;
$fp = fopen("dati/$myfile.txt", 'a');
fwrite($fp, '\pesi{');
fwrite($fp, $_POST['nreps']);
fwrite($fp, '}{');
fwrite($fp, $_POST['esercizio']);
fwrite($fp, '}{');
fwrite($fp, $_POST['peso']);
fwrite($fp, "}\n");
fclose($fp);
?>

<h1>Inserisci esercizio</h1>
<?php echo $myfile;?>
<form method = 'post' action = 'pesi_ii.php'>
<input type = 'hidden' name ='hiddenfilename' value = '<?php echo "$myfile";?>' >
Esercizio: <input type = 'text' name = 'esercizio'><br>
Numero di ripetuzioni: <input type = 'text' name = 'nreps'> <br>
Peso: <input type = 'text' name = 'peso'> <br>
<!--Media: <input type = 'text' name = 'media' default = '0' value = '0'>
Media serie <input type = 'text' name = 'mediaserie' default = '0' value = '0'> <br> -->
<input type = 'submit' name = 'next' value = 'Prossimo esercizio'>
<!--<input type = 'submit' name = 'split' value = 'Split'>-->
<input type = 'submit' name = 'stop' value = 'Stop' formaction="stop_pesi.php">
</form>
</body>
