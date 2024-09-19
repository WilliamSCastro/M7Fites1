<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EX_2</title>
</head>
<body>

<h1>Exercici_3</h1>
    <?php
        $n = 30;
        $m = 5;
    ?>
    <table style='border: 1px solid black; border-collapse: collapse;'>
        <?php
            for($i=0;$i<=$n;$i++) {
                echo "<tr>";
                    for($i=0;$i<=$n;$i++) {
                        echo "<td style='border: 1px solid black; border-collapse: collapse;'>$i</td>";
                    } 
                echo "</tr>"
            }
        ?>
    </table>
</body>
</html>