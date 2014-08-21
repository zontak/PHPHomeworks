<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Numbers</th>
            <th>Square</th>
        </tr>
        <?php
        $total = 0;
            for($i=0;$i <= 100; $i+=2){
                $round = round(sqrt($i), 2);
                echo "<tr>
                      <td>". $i ."</td>
                      <td>". $round ."</td>
                       </tr>";
                $total += $round;
            }
        ?>
        <tr>
            <th>Total</th>
            <td><?= $total ?></td>
        </tr>
    </table>
</body>
</html>