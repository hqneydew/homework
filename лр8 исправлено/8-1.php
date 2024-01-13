<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
</head>
<body>
    <table border="1">
    <caption>Таблица умножения</caption>
    <?php
        echo "<tr><th>*</th>";
        for($i = 0; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        for($i = 0; $i <= 10; $i++) {
            echo "<tr><th>$i</th>";
            for($j = 0; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>