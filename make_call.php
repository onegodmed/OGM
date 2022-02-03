<?php
 $astro_num = $_POST['custNum'];
 $call_time = $_POST['call_time'];
 $username = $_POST['username'];
 $password = $_POST['password'];

    $data='number='.$astro_num.'&max-call-duration='.$call_time;
    
    $url = 'https://telephonycloud.co.in/api/v1/calls';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result
?>