<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   
    <?php
    function zufzahl($max, $anzahl,$stellen)
    {
        echo '<table class="table table-striped table-hover table-responsive " id="table">';
        echo'<th>Zufallszahlen</th>';

        for($j=1;$j<=$stellen; $j++)
	{
		echo '<th> gerundet'. $j .' </th>';
    }
    echo '</tr> </br>';

        for ($i = 1; $i <= $anzahl; $i++) {
            $zzahl = rand(1, $max);
            $gerundet1 = abschneiden($zzahl,1);
            $gerundet2 = abschneiden($zzahl, 2);
            $gerundet3 = abschneiden($zzahl, 3);
            $gerundet4 = abschneiden($zzahl, 4);
        
            echo"<tr><td>".$zzahl."</td> <td>".$gerundet1."</td> <td>".$gerundet2."</td> <td>".$gerundet3."</td> <td>".$gerundet4."</td></tr>"; 
            
        }
        echo '<table/>';
    }
    function abschneiden($zahl, $stellen = 2)
    {
        $base = pow(10, $stellen);
        return $zahl - ($zahl % $base);
    }
    ?>

</head>

<body>
<h1>Zufallszahlen</h1>
<div>
<?php zufzahl(20000, 20,4); ?>
</div>
</body>

</html>