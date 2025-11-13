<?php
$pageTitle = 'Home Page';
echo "<!doctype html><html><head><title>";
echo $pageTitle;
echo "</title></head>";
?>

////////////////

<!doctype html>
<html>
<head>
<title><?php
$pageTitle = 'Home Page';
echo $pageTitle;
?></title>
</head>
<body>
</body>
</html>

////////////////

<!doctype html>
<html>
<head>
<title><?= $pageTitle = 'Home Page' ?></title>
</head>
<body>
</body>
</html>
