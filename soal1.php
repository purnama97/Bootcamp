<?php
$key = array_merge(range('A','Z'),range('a','z'),range(1,9));
$string = "";
$max = count($key)-1;
for($i = 1;$i<=250;$i++)
    {
    echo $i.'. ';
    for($c = 1;$c<=16;$c++)
       {
            $row = mt_rand(0,$max);
            echo $string = $key[$row];
            if($c %  4== 0 AND $c != 16)
            {
                echo "-";
            }
        }
        echo "\n";
    }
?>