

<?php

//Solution for https://www.hackerrank.com/challenges/encryption/problem


function encryption($s) {

    $str = trim($s,' ');

    $length = strlen($str);
    $cols = ceil(sqrt($length));
    $rows = floor(sqrt($length));
    
    if(($cols*$rows)<$length){
        $rows++;
    }

    $resArr=[];
    $tmp =0;

    for($j=0;$j<$rows;$j++){

        for ($i=0;$i<$cols;$i++){

            $resArr[$j][$i] = $str[$tmp+$i];
            if(($tmp+$i)==$length-1){
                break;
            }
        }

        $tmp+=$i;
    }

    $result = '';

    for($i=0;$i<$cols;$i++){

        for($j=0;$j<$rows;$j++){

            if(isset($resArr[$j][$i])){
                $result.=$resArr[$j][$i];
            }
        }

        $result.=" ";
    }

    return $result;
}