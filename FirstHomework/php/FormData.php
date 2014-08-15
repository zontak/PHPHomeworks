<!DOCTYPE html>
<html>
<head>
    <title>Get Form Data</title>
</head>
<body>
    <form action="FormData.php" method="post">
        <input type="text" name="name" placeholder="Name"> <br>
        <input type="text" name="age" placeholder="Age"> <br>
        <input type="radio" name="sex" value="male">Male <br>
        <input type="radio" name="sex" value="female">Female <br>
        <input type="submit" name="submit" value="Submit" >
    </form>
    <?php if(isset($_POST['submit'])): ?>
        <p>
            My name is <?= $_POST['name'];?>
            I am  <?= $_POST['age'] ;?>
            years old. I am <?= $_POST['sex'];?>
        </p>
    <?php endif; ?>
</body>
</html>