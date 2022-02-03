<?Php 
 $postdata = file_get_contents("php://input");
 
        $userData = json_decode($postdata);
        
        $data = $userData->data;
        $number = $userData->number;
        $agent = $userData->agent;
        $from = $userData->from;
        $svc = $userData->svc;
        $xnid = $userData->xnid;
        $time = $userData->time;
        $type = $userData->type;
        $event = $userData->event;
        
        $latestfile = array(
            'data' => $data,
            'number' => $number,
            'agent' => $agent,
            'from' => $from,
            'svc' => $svc,
            'xnid' => $xnid,
            'time' => $time,
            'type' => $type,
            'event' => $event
            );
            
$myfile = fopen("audiocalldata/".$xnid.".txt", "w")or die("Unable to open file!");
fwrite($myfile, json_encode($latestfile));
fclose($myfile);
 

?>