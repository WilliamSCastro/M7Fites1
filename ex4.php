<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EX_4</title>
</head>
<body>

<h1>Exercici_4</h1>
    <table style='border: 1px solid black; border-collapse: collapse;'>
        <?php
            $n = 5; // columnas
            for($i=0;$i<$n;$i++) {
                echo "<tr>";
                    for($j=0;$j<$n;$j++) {
                        if ($i === 0 && $j > 0) {
                            echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'> $j </td>";
                        } elseif ($j == 0 && $i > 0) {
                            echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>".chr($i+64)."</td>";
                        } else {
                            echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'></td>";
                        }
                    } 
                    
                    // Si i = 0 and j < 0 ---> números
                    // Si j = 0 and i < 0 ---> letras

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
