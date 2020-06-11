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
?>

<!-- TODO: da pensare bene come fare -->

<body>
<h1>Inserisci gli split:</h1>
<?php echo $myfile;?>
<p> TODO </p>

<form method = 'post' action = 'next.php'>
<input type = 'hidden' name ='hiddenfilename' value = '<?php echo "$myfile";?>' >
<!--Distanza split: <input type = 'text' name = 'distsplit'><br>
Tempo split: <input type = 'text' name = 'timesplit'> <br>
 -->

<input type = 'submit' name = 'next' value = 'Prossima prova'>
<input type = 'submit' name = 'newser' value = 'Nuova serie' formaction="new_ser.php"> <br>
<!--<input type = 'submit' name = 'split' value = 'Split'>-->
<input type = 'submit' name = 'stop' value = 'Stop' formaction="stop.php">
</form>
</body>
