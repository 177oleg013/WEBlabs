<?php
function which_is_larger(int $a, int $b): int {
    if ($a > $b) {
        return $a;
    } elseif ($b > $a) {
        return $b;
    } else {
        return $a;
    }
}
?>