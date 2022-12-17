<?php

$x = [];

for ($i= 299; $i < 500; $i++) {
    $x[] = $i + 1;
}

/* echo '<pre>';
print_r($x);
echo '</pre>'; */

$y = array_combine($x, $x);

sort($x);
/* foreach ($x as $key => $val){
    echo "arr[" . $key . "] = " . $val . "<br>";
} */
/* echo '<pre>';
print_r($y);
echo '</pre>'; */



?>