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

function merge($left, $right){
    $result = [];
    $mergeLeftIndex = 0;
    $mergeRightIndex = 0;

    while ($mergeLeftIndex < count($left) && $mergeRightIndex < count($right)) {
        if ($left[$mergeLeftIndex] > $right[$mergeRightIndex]) {
            $result[] = $right[$mergeRightIndex];
            $mergeRightIndex += 1;
        } elseif ($left[$mergeLeftIndex] < $right[$mergeRightIndex]) {
            $result[] = $left[$mergeLeftIndex];
            $mergeLeftIndex += 1;
        }
    }
    while ($mergeLeftIndex < count($left)) {
        $result[] = $left[$mergeLeftIndex];
        $mergeLeftIndex += 1;
    }
    while ($mergeRightIndex < count($right)) {
        $result[] = $right[$mergeRightIndex];
        $mergeRightIndex += 1;
    }
    return $result;
}   
echo implode(', ', mergeSort($numbers));
?>