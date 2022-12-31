<?php
    $str = "This";
    echo $str;
    $lenn = strlen($str);
    echo "<br> The length of this string is ". $lenn;
    echo "<br> The number of words in this string is " . str_word_count($str);
    // echo $lenn;
    echo "The reverse string is " . strrev($str); "<br>";
    echo "The replaced string is ". str_replace("is" , "at", $str);


?>