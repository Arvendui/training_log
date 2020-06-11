<!DOCTYPE html>
<html>
<body>
    <?php $g = date('d'); $m=date('m'); $y=date('Y');
    $mese = array(1=> 'Gennaio', '05' => 'Maggio', '06' => 'Giugno');
    $mys = "$g ";
    $mys .= $mese[$m];
    $mys .= " $y";
    $sigla = array('01'=> 'gen', '02'=>'feb', '05'=> 'mag', '06'=>'giu');
    $my_sigla = $sigla[$m];
    ?>

<h1>Informazioni generali</h1>
<form method = 'post' action = 'immetti_dati.php'>
Nome: <input type = 'text' name = 'nome'><br>
Data: <input type = 'text' name = 'data' value = '<?php echo "$mys" ?>'> <br>
Allenamento: <input type = 'text' name = 'all'> <br>
Luogo: <input type = 'text' name = 'loco'> <br>
Condizioni climatiche: <input type = 'text' name = 'meteo'> <br>
<h2> Tipologia di allenamento: </h2>
<input type = 'submit' name = 'ok' value = 'Ripetute con tempi'> <br>
<input type = 'submit' value = 'Ripetute senza tempi'formaction="notime.php"><br>
<input type = 'submit' value = 'Sala pesi' formaction="pesi_i.php"><br>

</body>
</html>
