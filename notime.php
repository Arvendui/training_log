<!DOCTYPE html>
<?php $g = date('d'); $m=date('m'); $y=date('Y');
$mese = array(1=> 'Gennaio', '05' => 'Maggio');
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
fwrite($fp, '\notime{');
fwrite($fp, $_POST['all']);
fwrite($fp, "}\n");
fwrite($fp, '\end{all}');
fclose($fp);
?>

<body>
<p> <a href ='dati/'>Qui</a> puoi trovare i file che hai scritto! </p>
</body>
