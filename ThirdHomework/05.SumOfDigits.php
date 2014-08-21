<!DOCTYPE html>
<html>
<head>
    <title>Sum Of Digits</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Input String</label>
        <input id="str" name="str" type="text">
        <input type="submit" name="submit">
    </form>
    <table border="1">
        <?php
        if($_POST){
            $string = explode(', ',$_POST['str']);
            foreach($string as $str) {
                $counter = 0;
                echo "<tr><td>". $str ."</td>".
                     "<td>";
                for($i = 0; $i <= count($str) * 3; $i++){
                    $counter += $str[$i];
                };
                echo $counter ."</td></tr>";
                echo "</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>