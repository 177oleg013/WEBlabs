<?php
$limerick = [
    "A magazine writer named Bing",
    "Could make copy from most anything",
    "But the copy he wrote",
    "of a ten-dollar note",
    "Was so good he now lives in Sing Sing"
];

file_put_contents("limerick.txt", implode("\n", $limerick));
?>

/////////////

<?php
$url = "https://jsonplaceholder.typicode.com/todos/1";
$jsonString = file_get_contents($url);
$dataArray = json_decode($jsonString, true);

var_dump($dataArray);
?>

//////////////////

<!--file:
 Oleg,120
Maria,95 -->

<?php
$totalScore = 0;
$output = "";

$files = glob("data/*.txt");

foreach ($files as $file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($player, $score) = explode(",", $line);
        $totalScore += (int)$score;
        $output .= "$player scored $score\n";
    }
}

file_put_contents("results.txt", $output);
print "Total score: $totalScore\n";
?>