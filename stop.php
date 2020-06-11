<!DOCTYPE html>

<?php
$myfile = $_POST['hiddenfilename'];
echo 'my file is'; echo $myfile;

$fp = fopen("dati/$myfile.txt", 'a');
if ($_POST['uno'] != 'none'){
    fwrite($fp, '\getmedia{uno}{');
    fwrite($fp, $_POST['uno']);
    fwrite($fp, '}');
}
if ($_POST['due'] != 'none'){
    fwrite($fp, '\getmedia{due}{');
    fwrite($fp, $_POST['due']);
    fwrite($fp, '}');
}
if ($_POST['tre'] != 'none'){
    fwrite($fp, '\getmedia{tre}{');
    fwrite($fp, $_POST['tre']);
    fwrite($fp, '}');
}
fwrite($fp, '\end{all}');
fclose($fp);
?>
<body>
<p> <a href ='dati/'>Qui</a> puoi trovare i file che hai scritto! </p>
</body>
