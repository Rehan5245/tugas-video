<?php
function belajar()
{
    echo "saya belajar java ygy";
}

function luaspersegi($p = 5, $l = 3)
{
    $luas = $p * $l;
    echo $luas;
}

function luas($p = 5, $l = 3)
{
    $luas = $p * $l;
    return $luas;
}

function output()
{
    return "belajar php anjay";
}
echo luas(100,3) * 5;
?>