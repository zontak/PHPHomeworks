<!DOCTYPE html>
<html>
<head>
    <title>First Question</title>
</head>
<body>

    <form method="post">
        <input type="text" name="str" placeholder="Enter Your String"> <br />
        <input type="submit">
    </form>

    <?php
    if($_POST):
        $counter = 0;
       $arr = explode(", ", $_POST['str']);
        for($i = 0; $i < count($arr); $i++):
        echo ($i . ":" . $arr[$i] . "<br />");
        endfor;
    endif;
    ?>

</body>
</html>