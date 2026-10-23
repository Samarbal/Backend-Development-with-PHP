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


echo "<br>";
echo "--------------------------------<br>";

$grades = array(42, 98, 100, 43, 12);
echo "Grades in ascending sorting: <br>";
sort($grades);
print_r($grades );
echo "<br>";


echo "Grades in descending sorting: <br>";
rsort($grades);
print_r($grades);


echo "<br>";
echo "----------------------------------------<br>";

$age = array("Asmaa" => "35", "Mohammed" => "37", "Ali" => "25");

//Sort by value (ascending)
echo "Sorted by value in ascending order (asort): <br>";
asort($age);
print_r($age);

echo "<br><br>";

// Sort by key (descending)
echo "Sorted by key in descending order (krsort): <br>";
krsort($age);
print_r($age);

?>
