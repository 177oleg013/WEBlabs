<?php
do {
    $word = readline("Enter a word: ");
} while ($word !== ucfirst($word));

print "You entered a word beginning with a capital letter: $word\n";
?>

///////////

<?php
while (true) {
    $input = readline("Enter something: ");
    if (is_numeric($input)) {
        print "You entered a numeric value: $input\n";
        break;
    }
}
?>

/////////

<?php
for ($i = 1; $i <= 21; $i++) {
    if ($i % 3 !== 0) {
        continue;
    }
    print "$i\n";
}
?>
