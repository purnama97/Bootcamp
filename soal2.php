<?php
$tgllhr = 3;
$blnlhr = 2;
$jmlptg = 0;

$data = array(1,2,1,3,2,1,3,2);
$leng = count($data)-1;

for($i=0;$i<=$leng;$i++)
{   
    if($i <= $leng-1){
    
        if($data[$i] == $tgllhr)
        {
            $jumlah = $data[$i];
        }else{
            $l = $i+1;
            $jumlah = $data[$i] + $data[$l];
        }
        
      if($jumlah == $tgllhr) {
            $jmlptg++;
        }
    }
}
echo "Jumlah Potongan Kue Adalah ".$jmlptg;
?>