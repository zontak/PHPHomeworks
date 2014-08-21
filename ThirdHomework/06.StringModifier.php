<!DOCTYPE html>
<html>
<head>
    <title>String Modifier</title>
</head>
<body>
    <form method="post">
        <input type="text" name="text">
        <input type="radio" value="CheckPolindrome" name="radio" id="check">
        <label for="check">Check Polindrome</label>
        <input type="radio" value="ReverseString" name="radio" id="reverse">
        <label for="reverse">Reverse String</label>
        <input type="radio" value="Split" name="radio" id="split">
        <label for="split">Split</label>
        <input type="radio" value="HashString" name="radio" id="hash">
        <label for="hash">Hash String</label>
        <input type="radio" value="ShuffleString" name="radio" id="shuffle">
        <label for="shuffle">Shuffle String</label>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $value = $_POST['radio'];
        $string = $_POST['text'];
        if($value === 'CheckPolindrome') echo checkPalindrome($string);
        if($value == 'ReverseString') echo ReverseString($string);
        if($value == 'Split') echo Splitt($string);
        if($value == 'HashString') echo HashString($string);
        if($value == 'ShuffleString') echo ShuffleString($string);
    }

    function checkPalindrome($string) {
        $normalizedString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
        return "$string is " . ($normalizedString == strrev($normalizedString) ? "" : "not ") . "a palindrome!";
    }
    function ReverseString($string) {
        return $string = strrev($string);
    }
    function Splitt($string){
        $string = str_split($string);
        foreach($string as $str){
            echo $str . " ";
        }
    }
    function HashString($string){
        return crypt($string);
    }
    function ShuffleString($string){
        return str_shuffle($string);
    }
    ?>
</body>
</html>