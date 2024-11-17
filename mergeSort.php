<?php

$numbers = [4,1,9,3];

function mergeSort(array $array){
    if (count($array) <= 1){
        return $array;
    }
    $middle = (int)(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);
    $mergeLeft = mergeSort($left);
    $mergeRight = mergeSort($right);

    return merge($mergeLeft, $mergeRight);
}
?>