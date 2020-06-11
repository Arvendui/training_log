<!DOCTYPE html>
<?php $g = date('d'); $m=date('m'); $y=date('Y');
$mese = array(1=> 'Gennaio', '05' => 'Maggio', '06'=> 'Giugno');
$mys = "$g ";
$mys .= $mese[$m];
$mys .= " $y";
?>
<?php
$myfile = $_POST['nome'];
$myfile .= $_POST['data'];
echo $_POST['data'];
echo 'my file is'; echo $myfile;
$fp = fopen("dati/$myfile.txt", 'a');
fwrite($fp, '\begin{all}{');
fwrite($fp, $g);
fwrite($fp, '}{');
fwrite($fp, $mese[$m]);
fwrite($fp, '}{');
fwrite($fp, $y);
fwrite($fp, '}{');
fwrite($fp, $_POST['all']);
fwrite($fp, "}\n");
fwrite($fp, '\luogo{');
fwrite($fp, $_POST['loco']);
fwrite($fp, "}\n");
fwrite($fp, '\meteo{');
fwrite($fp, $_POST['meteo']);
fwrite($fp, "}\n");
fwrite($fp, "\serie\n");
fclose($fp);
?>

<h1>Dati ripetute</h1>
<?php echo $myfile;?>
<form method = 'post' action = 'next.php'>
<input type = 'hidden' name ='hiddenfilename' value = '<?php echo "$myfile";?>' >
Distanza: <input type = 'text' name = 'dist'><br>
Tempo: <input type = 'text' name = 'time'> <br>
    Media:<br>
    None <input type = 'radio' name = 'media' value = 'None' checked>
    1 <input type = 'radio' name = 'media' value = 'uno'>
    2<input type = 'radio' name = 'media' value = 'due'>
    3<input type = 'radio' name = 'media' value = 'tre'><br>
    <input type="hidden" name='mediaserie' value="0" >
    Media serie:<input type = 'checkbox' name = 'mediaserie' value = '1'> <br>

<!--Media: <input type = 'text' name = 'media' default = '0' value = '0'>
Media serie <input type = 'text' name = 'mediaserie' default = '0' value = '0'> <br> -->
<input type = 'submit' name = 'next' value = 'Prossima prova'>
<input type = 'submit' name = 'newser' value = 'Nuova serie' formaction="new_ser.php"> <br>
<input type = 'submit' name = 'split' value = 'Split' formaction="split.php">
<input type = 'submit' name = 'stop' value = 'Stop' formaction="stop_medie.php">


</form>
</body>
