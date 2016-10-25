<?php

function chunk_split_unicode($str, $l = 76, $e = "\r\n") {
    $tmp = array_chunk(
        preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
    $str = "";
    foreach ($tmp as $t) {
        $str .= join("", $t) . $e;
    }
    return $str;
}

$str = "hello, this string s split into chunks.";
echo chunk_split($str, 4) ."\n";
echo chunk_split_unicode($str, 4);




?>