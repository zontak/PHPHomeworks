<?php

$integer = "21sad";
if (gettype($integer) == 'integer' ||
    gettype($integer) == 'double' ||
    gettype($integer) == 'float' ) {
    var_dump($integer);
}
else {
    echo gettype($integer);
}
?>