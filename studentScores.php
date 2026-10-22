<?php
// define a function to see the passed student scores
function displayScores($students = []) {
    // if the array is empty, display a message
    if (empty($students)) {
        echo "No student scores to display.<br>";
        return;
    }
    $passedCount=0;
    $failedCount=0;

    // loop through the array and display each student's score
    foreach ($students as $name => $score) {
        echo "Student: $name". " | ". "Score: $score<br>";
        if ($score >= 60) {
            $passedCount++; } 
        else {
            $failedCount++;}
    }
    echo "Passed: $passedCount<br>";
    echo "Failed: $failedCount<br>";  }
$studentScores = array(
    "Ali" => 85, "Ahmed" => 92,
    "Dima" => 50, "Rama" => 96);

displayScores($studentScores);
?>
