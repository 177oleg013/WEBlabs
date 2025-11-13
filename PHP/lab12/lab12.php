<?php
$age = $_POST['age'] ?? '';
?>
<form action="" method="post">
  <label for="age">Enter your age:</label>
  <input type="text" id="age" name="age" value="<?= htmlspecialchars($age) ?>">
  <input type="submit" value="Submit">
</form>

////////////

<?php
$age = $_POST['age'] ?? '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!is_numeric($age)) {
        $error = 'Please enter a numeric age.';
    }
}
?>
<form action="" method="post">
  <label for="age">Enter your age:</label>
  <input type="text" id="age" name="age" value="<?= htmlspecialchars($age) ?>">
  <input type="submit" value="Submit">
</form>
<?php
if ($error) {
    echo "<p style='color:red;'>$error</p>";
}
?>

//////////?

<?php
$age = $_POST['age'] ?? '';
$error = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!is_numeric($age)) {
        $error = 'Please enter a numeric age.';
    } else {
        $nextAge = (int)$age + 1;
        $message = "On your next birthday, you will be $nextAge years old.";
    }
}
?>
<form action="" method="post">
  <label for="age">Enter your age:</label>
  <input type="text" id="age" name="age" value="<?= htmlspecialchars($age) ?>">
  <input type="submit" value="Submit">
</form>
<?php
if ($error) {
    echo "<p style='color:red;'>$error</p>";
} elseif ($message) {
    echo "<p style='color:green;'>$message</p>";
}
?>

///////////

<?php
$email = $_POST['email'] ?? '';
$error = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address.';
    } else {
        $message = "The email address $email is valid.";
    }
}
?>
<form action="" method="post">
  <label for="email">Enter your email:</label>
  <input type="text" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
  <input type="submit" value="Submit">
</form>
<?php
if ($error) {
    echo "<p style='color:red;'>$error</p>";
} elseif ($message) {
    echo "<p style='color:green;'>$message</p>";
}
?>