<?php 
$count = 0;
$str = [];
while ($count < 10000) {
    $i = 0;
    $d = 100;

    while ($i < 100) {
        $str[$i] = '*';
        $j = 0;
        while ($j < $i) {
            echo $str[$j];
            $j++;
        }
        echo "\n";
        $i++;
        usleep(50000);
    }
    while ($d > 0) {
        $str[$d] = '';
        $k = 0;
        while ($k < $d) {
            echo $str[$k];
            $k++;
        }
        echo "\n";
        $d--;
        usleep(50000);
    }
    $count++;
}
echo "Hello World";
