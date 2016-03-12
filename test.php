<?php
/**
 * User: Filipe
 * Date: 2016-03-11
 * Time: 9:20 PM
 */

include_once("int2crypt.php");

echo "<pre>";

foreach(range(9999990000, 9999999999) as $n) {
    echo $n." - ";
    $hash = int2crypt::hash($n, 9);
    echo $hash." - Reversed: ";
    echo int2crypt::unhash($hash)."<br/>";
}