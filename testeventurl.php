<?Php 
 $postdata = file_get_contents("php://input");
 
        $userData = json_decode($postdata);
        if($userData->type == "cdr"){
        $to = $userData->to;
        $appid = $userData->appid;
        $time = $userData->time;
        $from = $userData->from;
        $direction = $userData->direction;
        $duration = $userData->duration;
        $cmiuuid = $userData->cmiuuid;
        $request_id = $userData->request_id;
        $conversation_uuid = $userData->conversation_uuid;
        $callerid = $userData->callerid;
        $vn = $userData->vn;
        $out = $userData->out;
        $status = $userData->status;
        $leg = $userData->leg;
        $type = $userData->type;
        
        $latestfile= '{"message":{ 
  "to": '.$to.',
  "appid": '.$appid.',
  "time": '.$time.',
  "from": '.$from.',
  "direction": "'.$direction.'",
  "duration": "'.$duration.'",
  "cmiuuid": "'.$cmiuuid.'",
  "request_id": "'.$request_id.'",
  "conversation_uuid": "'.$conversation_uuid.'",
  "callerid": "'.$callerid.'",
  "vn": '.$vn.',
  "out": "'.$out.'",
  "status": "'.$status.'",
  "leg": "'.$leg.'",
  "type": "'.$type.'" 
}}';
$myfile = fopen("audiocalldata/".$request_id.".txt", "w")or die("Unable to open file!");
fwrite($myfile, $latestfile);
fclose($myfile);
} else{
    $to = $userData->to;
        $appid = $userData->appid;
        $time = $userData->time;
        $from = $userData->from;
        $direction = $userData->direction;
        $duration = $userData->duration;
        $cmiuuid = $userData->cmiuuid;
        $request_id = $userData->request_id;
        $conversation_uuid = $userData->conversation_uuid;
        $callerid = $userData->callerid;
        $vn = $userData->vn;
        $out = $userData->out;
        $status = $userData->status;
        $leg = $userData->leg;
        $type = $userData->type;
        
              $latestfile= '{"message":{ 
  "to": '.$to.',
  "appid": '.$appid.',
  "time": '.$time.',
  "from": '.$from.',
  "direction": "'.$direction.'",
  "duration": "'.$duration.'",
  "cmiuuid": "'.$cmiuuid.'",
  "request_id": "'.$request_id.'",
  "conversation_uuid": "'.$conversation_uuid.'",
  "callerid": "'.$callerid.'",
  "vn": '.$vn.',
  "out": "'.$out.'",
  "status": "'.$status.'",
  "leg": "'.$leg.'",
  "type": "'.$type.'" 
}}';
$myfile = fopen("adminaudiocalldata/".$request_id.".txt", "w")or die("Unable to open file!");
fwrite($myfile, $latestfile);
fclose($myfile);
}

?>