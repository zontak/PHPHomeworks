<!DOCTYPE html>
<html>
<head>
    <title>Car Randomizer</title>
</head>
<body>
    <form method="post" action="">
        <label for="input">Enter Cars</label>
        <input id="input" name="input" type="text">
        <input type="submit" value="Show Result">
    </form>
    <table border="1">
        <tr>
            <th>Car</th>
            <th>Colour</th>
            <th>Count</th>
        </tr>
        <tr>
            <?php
                $randomColour = array('yellow', 'red', 'blue',
                    'black', 'gray', 'orange');
                $string = explode(', ',$_POST['input']);
               foreach($string as $str => $value){
           echo    "<tr> <td>" . $value .
                   "</td><td>" . $randomColour[$str] .
                   "</td><td>" . rand(1,5) .
                   "</td></tr>";
               }
            ?>
        </tr>
    </table>
</body>
</html>