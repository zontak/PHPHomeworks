<!DOCTYPE html>
<html>
<head>
    <title>Second Question</title>
</head>
<body>
    <form method="post">
        <input type="text" name="str" placeholder="Enter Your String"> <br />
        <input type="submit" name="Submit">
    </form>
    <br />
    <?php
    $assarr = array();
    if(isset($_POST['Submit'])):
        $arr = explode(", ", $_POST['str']);
        for($i = 0; $i < count($arr); $i++):
            if(array_key_exists($arr[$i],$assarr) == true){
                $assarr[$arr[$i]]++;
            }
            else{
                $assarr[$arr[$i]] = 1;
            }
        endfor;
        arsort($assarr);
        foreach ($assarr as $key => $value) {
            echo "$key : $value times" . '<br>';
        }
        $unique = array_unique($assarr);
        $arrValue = array_keys($assarr);
        if(count($unique) != 1){
            echo "<br />";
            echo "Most Frequend Tag is: $arrValue[0]";
        }
    endif;
    ?>
</body>
</html>