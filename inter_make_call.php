<?php
 $astro_num = $_POST['custNum'];
 $call_time = $_POST['call_time'];
 $agent_otp = $_POST['agent_otp'];

    $data='key='.$agent_otp.'&number='.$astro_num.'&mapping-expiry-time=60&max-call-duration='.$call_time;
    
    $url = 'https://telephonycloud.co.in/api/v1/mask';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "9999328224:admin");
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result
?>