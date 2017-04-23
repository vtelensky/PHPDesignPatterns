<?php
include __DIR__ . "/../../vendor/autoload.php";

$grade = new \Structural\Adapter\Grade(50, "Math");

echo "Getting grade via instance of " . get_class($grade) . "\n";
echo "Grade: " . $grade->getGrade() . "\n\n";

$adapter = new \Structural\Adapter\ExamScoreAdapter(
    new \Structural\Adapter\ExamScore("Math", 9.5, 31.3)
);

echo "Getting grade via instance of " . get_class($adapter) . "\n";
echo "Grade: " . $adapter->getGrade() . "\n\n";
