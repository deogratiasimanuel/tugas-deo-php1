<?php

function Palindrome($String) {
    if (strrev($String) == $String) {
        return 1;
    } else {
        return 0;
    }
}
$original = "kasur ini rusak";
if (Palindrome($original)) {
    echo "Ini Palindrom";
} else {
    echo "Bukan Palindrom";
}