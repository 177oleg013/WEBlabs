<?php
$colors = ["red", "blue", "green", "yellow", "purple"];

$randomKey = array_rand($colors);
print $colors[$randomKey] . "\n";
?>

//////////////

<?php
$colors = ["red", "blue", "green", "yellow", "purple"];

foreach ($colors as $index => $color) {
    print "color $index = $color\n";
}
?>

///////////

<?php
$colors = ["red", "blue", "green", "yellow", "purple"];

$lastColor = array_pop($colors);
print "Last color was: $lastColor\n";

var_dump($colors);
?>

//////////

<?php
$ages = [23, 31, 55];

$count = count($ages);
$average = array_sum($ages) / $count;

print "Number of items: $count\n";
print "Average age: $average\n";
?>
