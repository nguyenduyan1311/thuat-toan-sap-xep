<?php
function selectionSort($list){
    $n=count($list);
    $nextSwap=null;
    $temp=null;
    for($i=0; $i<$n-1; $i++) {
        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++) {
            if( $list[$j]<$list[$nextSwap] ) {
                $nextSwap=$j;
            }
        }
        $temp=$list[$i];
        $list[$i]=$list[$nextSwap];
        $list[$nextSwap]=$temp;
    }
    return array_reverse($list);
}
echo implode(", ",array( 1, 9, 4.5, 6.6, 5.7, -4.5));
echo "<br>";
echo implode(", ",selectionSort(array( 1, 9, 4.5, 6.6, 5.7, -4.5)));