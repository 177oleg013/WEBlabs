<?php
print '123';
include 'file2.php';
print '789';
?>

/////////



<?php
include 'which_is_larger.php';

print which_is_larger(4, 5) . "\n";
print which_is_larger(21, 19) . "\n";
print which_is_larger(3, 3) . "\n";
?>

//////////


<?php
include 'which_is_larger2.php';

print which_is_larger2(4, 5) . "\n";
print which_is_larger2(21.7, 19.4) . "\n";
var_dump(which_is_larger2(3, 3));
?>

////////////

<?php
include 'my_functions.php';

capital_o();
capital_o(character: '#');
capital_o(spacer: '.');
?>