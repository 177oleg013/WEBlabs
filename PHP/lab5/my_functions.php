<?php
function capital_o(string $character = 'O', string $spacer = ' ') : void {
    echo "{$spacer}{$character}{$character}{$character}{$spacer}\n";
    echo "{$character}{$spacer}{$spacer}{$character}\n";
    echo "{$character}{$spacer}{$spacer}{$character}\n";
    echo "{$character}{$spacer}{$spacer}{$character}\n";
    echo "{$spacer}{$character}{$character}{$character}{$spacer}\n";
}
?>