<?Php 
$postdata = file_get_contents("php://input");
        $userData = json_decode($postdata);
        $duration = $userData->duration;
        $cust_num = $userData->cust_num;
        $rand_num = $userData->rand_num;
$latestfile= '[
  {
  "action": "bridge",
  "duration": '.$duration.',
  "timeout": 40,
  "from": 914445739524,
  "loop": 1,
  "connect": [
    {
      "type": "pstn",
      "number": '.$cust_num.'
    }
   ]
  }
]';

$myfile = fopen("audiocallurl/".$rand_num.".txt", "w")or die("Unable to open file!");
fwrite($myfile, $latestfile);
fclose($myfile);
if(file_exists("audiocallurl/".$rand_num.".txt")){
    echo json_encode(array("status"=>"success"));
} else{
     echo json_encode(array("status"=>"failed"));
}
?>