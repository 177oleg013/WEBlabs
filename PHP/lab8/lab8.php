<?php
$heights = [
    "Fred" => 1.82,
    "Joelle" => 1.55,
    "Robin" => 1.70
];

foreach ($heights as $name => $height) {
    print "$name = $height meters\n";
}
?>

/////////////

<?php
$movies = [
    "Back to the Future" => [
        "duration" => 116,
        "leadingActor" => "Michael J. Fox"
    ],
    "The Fifth Element" => [
        "duration" => 126,
        "leadingActor" => "Bruce Willis"
    ],
    "Alien" => [
        "duration" => 117,
        "leadingActor" => "Sigourney Weaver"
    ]
];

foreach ($movies as $title => $info) {
    print "$title\n";
    print "  duration: {$info['duration']}\n";
    print "  leadingActor: {$info['leadingActor']}\n";
}
?>

////////////

<?php
$odd = [1, 3, 5, 7, 9];
$even = [2, 4, 6, 8];

$combined = [...$odd, ...$even];
sort($combined);

print_r($combined);
?>
