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
<body>
<form method = 'post' action = 'stop.php'>
    <input type = 'hidden' name ='hiddenfilename' value = '<?php echo "$myfile";?>' >
    Media 1: <input type = 'text' name = 'uno' value = 'none'><br>
    Media 2: <input type = 'text' name = 'due' value = 'none'> <br>
    Media 3: <input type = 'text' name = 'tre' value = 'none'> <br>
    <input type = 'submit' name = 'ok' value = 'ok'> <br>
</form>
</body>
