<?php
$grades = [85, 92, 78, 88, 95];

function gradeWithDescending($arr){
    rsort($arr);
    return $arr;
}
$sortedGrade = gradeWithDescending($grades);
print_r($sortedGrade);