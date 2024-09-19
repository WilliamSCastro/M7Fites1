<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EX_1</title>
</head>
<body>

<h1>Exercici_1</h1>
    <table style='border: 1px solid black; border-collapse: collapse;'>
        <tr>
        <?php
            for($i=0;$i<10;$i++) {
                echo "<td style='border: 1px solid black; border-collapse: collapse; padding: 15px;'>$i</td>";
            }
        ?>
        </tr>
    </table>
</body>
</html>