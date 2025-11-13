<?php
$name = 'Oleg';
print $name . ' is learning PHP';
?>

////////

<?php
$fruit = "apple";
print "$fruit juice is made from {$fruit}s.\n";

$fruit = "orange";
print "$fruit juice is made from {$fruit}s.\n";
?>

/////////

<?php
$happyMessage = <<<EOT
I am learning PHP.
It is fun and powerful.
EOT;

print $happyMessage;
?>


////////////

<?php
$appleJuice = "apple juice is made from apples.";
$grapefruitJuice = str_replace("apple", "grapefruit", $appleJuice);
$grapefruitJuice = ucfirst($grapefruitJuice);

print $grapefruitJuice;
?>
