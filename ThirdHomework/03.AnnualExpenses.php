<?php
$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Annual Expenses</title>
</head>
<body>
    <form method="post" action="">
        <label for="year">Enter Number Of Year</label>
        <input type="number" id="year" name="num">
        <input type="submit" value="Show costs" name="submit">
    </form>
    <table border="1">
        <tr>
            <th>Year</th>
            <?php
            foreach($month as $mon){
                echo "<th>". $mon . "</th>";
            }
            ?>
            <th>Total:</th>
        </tr>
        <tr>
            <?php
            if(isset($_POST['submit'])) {
                $lenght = $_POST['num'];
                $currentYear = date("Y");
                for($i=0;$i < $lenght;$i++) {
                echo "<tr>"."<td>". $currentYear-- . "</td>";
                    $total = 0;
                    for($m = 0; $m <= 12; $m++){
                        $random = rand(1, 999);
                       echo "<td>". $random . "</td>";
                        $total += $random;
                    }
                echo "<td>" . $total . "</td></tr>";
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>