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
fwrite($fp, '\end{all}');
fclose($fp);
?>
<body>
<p> <a href ='dati/'>Qui</a> puoi trovare i file che hai scritto! </p>
</body>
