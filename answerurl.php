<?php 
$rand_num = $_GET['customer'];

$path = "audiocallurl/".$rand_num.".txt";

$postdata = file_get_contents($path);

//unlink($path);
echo $postdata;

?>