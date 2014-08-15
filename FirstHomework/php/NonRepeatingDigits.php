<?php
$integer = 1234;
if( $integer < 102) {
    echo 'no';
}
for($i = 102; $i <= $integer; $i++ ){
    if ($i >= 987):
        break;
    endif;
    $array = str_split($i);
    if($array[0] != $array[1] && $array[1] != $array[2] && $array[2] != $array[0]):
        echo $i . ', ';
    endif;
}
?>