<?php
$studentGrades = [
   'student1' => ['Math' => 85, 'English' => 33, 'Science' => 56],
   'student2' => ['Math' => 99, 'English' => 83, 'Science' => 76],
   'student3' => ['Math' => 60, 'English' => 53, 'Science' => 46]
];

function averageGrade($grades){
    foreach($grades as $student => $subjects){
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "$student's Average Grade: $average\n";
    }
}

averageGrade($studentGrades);