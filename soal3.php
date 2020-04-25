<?php

function cetak_gambar($param)
{
    $min = 1;
    $max = $param;
    if($param % 2 == 0)
    {
        echo "Bilangan Harus Ganjil";
    }else{
        for($i=1; $i<=$param;$i++)
        {
            for($c=1;$c<=$param;$c++)
            {
                if($c == $min OR $c == $max)
                {
                    echo "x ";
                }else{
                    echo "= ";
                }
            }
            $min++;
            $max--;
            echo "\n";
        }
    }
}

cetak_gambar(5);
echo "\n";
cetak_gambar(7);
?>