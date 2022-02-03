<?php 

 $request_id = $_POST['request_id'];

$path = "new-call-api/audiocalldata/".$request_id.".txt";

$postdata = file_get_contents($path);
$userData = json_decode($postdata, 1);
$callDuration="";
$callId = "";
$eventtype = "";
if($userData['CallStatusCustomer'] == 0 || $userData['CallStatusCustomer'] == 1){
      $callDuration = $userData['phonenotalktime'];
      $callId = $callData['refno'];
      if($userData['CallStatusCustomer'] == 0){
          $eventtype = "missed";
      }else{
          $eventtype = "answered";
      }
      echo json_encode(array('callDur'=>$callDuration, 'call-id' => $callId, 'eventtype' => $eventtype));
} else if($userData['CallStatusCustomer'] == "Talk"){
      echo json_encode(array('eventtype' => $userData['CallStatusCustomer']));  
}else{
    echo json_encode(array('eventtype' => $userData['CallStatusCustomer']));
}

?>