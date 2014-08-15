<?php
$name = "Gosho";
$phoneNumber = "0123-456-789";
$age = 19;
$address = "Hadji Dimityr";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Information Table</title>
    <link rel="stylesheet" href="../css/TableStyle.css">
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <td>
            <?php echo $name; ?>
        </td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td>
            <?php echo $phoneNumber; ?>
        </td>
    </tr>
    <tr>
        <th>Age</th>
        <td>
            <?php echo $age; ?>
        </td>
    </tr>
    <tr>
        <th>Address</th>
        <td>
            <?php echo $address; ?>
        </td>
    </tr>
</table>
</body>
</html>