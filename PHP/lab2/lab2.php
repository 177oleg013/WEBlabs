<?php
$scoreFloat = 55.9;
$scoreInt = (int)$scoreFloat;

echo gettype($scoreFloat) . " scoreFloat = $scoreFloat\n";
echo gettype($scoreInt) . " scoreInt = $scoreInt\n";
?>

//////////////////////////

<?php
$age = 21;
var_dump($age);

$age = NULL;
var_dump($age);

unset($age);
var_dump($age);
?>


