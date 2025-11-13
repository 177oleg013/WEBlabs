<?php
function which_is_larger2(float $a, float $b): float|null {
    if ($a > $b) {
        return $a;
    } elseif ($b > $a) {
        return $b;
    } else {
        return null;
    }
}
?>