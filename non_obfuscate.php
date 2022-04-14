<?php
function anybite($a) {
    $b = substr($a, 15, -15);
    $c = base64_decode($b);
    return $c;
}
?>
