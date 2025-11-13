<?php
$name = "Oleg";

if (strlen($name) < 4) {
    print "That is a short name";
}
?>

/////////

<?php
$laundryWeightKg = 10;

if ($laundryWeightKg < 9) {
    print "Fits in standard machine";
} else {
    print "Needs medium to large machine";
}
?>

///////////

<?php
$vehicle = "car";

switch ($vehicle) {
    case "bus":
        print "Beep beep";
        break;
    case "train":
        print "Runs on tracks";
        break;
    case "car":
        print "Has at least three wheels";
        break;
    case "helicopter":
        print "Can fly";
        break;
    case "bicycle":
        print "You never forget once you've learned";
        break;
    default:
        print "You've chosen the road less traveled";
}
?>

////////////////

<?php
$userNameCorrect = true;
$passwordCorrect = true;

if ($userNameCorrect && $passwordCorrect) {
    print "You are now logged in";
} else {
    print "Invalid credentials, please try again";
}
?>

