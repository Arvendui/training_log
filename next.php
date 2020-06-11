<!DOCTYPE html>

<?php
$myfile = $_POST['hiddenfilename'];
echo 'my file is'; echo $myfile;


if ($_POST['mediaserie'] == '1' and $_POST['media'] != 'None'){
    $fp = fopen("dati/$myfile.txt", 'a');
    fwrite($fp, '\provaserie[');
    fwrite($fp, $_POST['media']);
    fwrite($fp,'][1]{');
    fwrite($fp, $_POST['dist']);
    fwrite($fp, '}{');
    fwrite($fp, $_POST['time']);
    fwrite($fp, "}\n");
    fclose($fp);
}elseif ($_POST['media'] != 'None'){
    $fp = fopen("dati/$myfile.txt", 'a');
    fwrite($fp, '\provaserie[');
    fwrite($fp, $_POST['media']);
    fwrite($fp,']{');
    fwrite($fp, $_POST['dist']);
    fwrite($fp, '}{');
    fwrite($fp, $_POST['time']);
    fwrite($fp, "}\n");
    fclose($fp);
}else{
    $fp = fopen("dati/$myfile.txt", 'a');
    fwrite($fp, '\provaserie{');
    fwrite($fp, $_POST['dist']);
    fwrite($fp, '}{');
    fwrite($fp, $_POST['time']);
    fwrite($fp, "}\n");
    fclose($fp);
}

echo 'media '; echo $_POST['media'];
echo ' media serie ' ; echo $_POST['mediaserie'];
?>
<body>
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
    <input type="hidden" name="mediaserie" value="0" >
    Media serie:<input type = 'checkbox' name = 'mediaserie' value = '1'> <br>
<!--Media: <input type = 'text' name = 'media' default = '0' value = '0'>
Media serie <input type = 'text' name = 'mediaserie' default = '0' value = '0'> <br> -->
<input type = 'submit' name = 'next' value = 'Prossima prova'>
<input type = 'submit' name = 'newser' value = 'Nuova serie' formaction="new_ser.php"> <br>
<!--<input type = 'submit' name = 'split' value = 'Split'>-->
<input type = 'submit' name = 'stop' value = 'Stop' formaction="stop_medie.php">
</form>
</body>
