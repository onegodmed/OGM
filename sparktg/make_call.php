<?php
 $astro_num = $_POST['astroNum'];

    $data='number='.$astro_num.'&max-call-duration=70';
    
    $url = 'https://telephonycloud.co.in/api/v1/calls';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "9509259532:agent007");
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result
?>