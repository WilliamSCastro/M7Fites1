<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EX_3</title>
</head>
<body>

<h1>Exercici_3</h1>
    <table style='border: 1px solid black; border-collapse: collapse;'>
        <?php
        $m = 5; // filas
        $n = 30; // columnas
            for($i=0;$i<=$m;$i++) {
                echo "<tr>";
                    for($j=0;$j<=$n;$j++) {
                        echo "<td style='border: 1px solid black; border-collapse: collapse;'>".$i+$j."</td>";
                    } 
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>