<?php 

	define('SERVER_API_KEY', 'AAAAc1gwDFw:APA91bFHgbjKSIIzBnZlHT6HpGzbq2J-rZY5VeIGUlVBZLHgqVfakQOf__ojpNv56mc8NeuiVieZOOfZzGOqMNJAttIFNqz_qqQ46stTjhV4m5h_9vYuc9eCyBpkVb4qDUFdwuWrCl1F');
	// $tokens = ['cCLA1_8Inic:APA91bGhuCksjWEETYWVOh04scsZInxdWmXekEr5F9-1zJuTDZDw3It_tNmpA__PmoxDTISZzplD_ciXvsuw2pMtYSzdfIUAUfcTLnghvJS0CVkYW9sVx2HnF1rqnxsFgSdYmcXpHKLs'];
	// $tokens = ['edapMVPqR1ugPaxgPXA0e2:APA91bE3588F6RN3QnxIB88IQB8fjcQm_QaOiOIZhhavjB_jHyfWC-9VTD0126EjoHIDX0kQL6ap6XHR0DuwYzEYER9L-FiG1_VZBnlDvODAEj-8Bj7OoEGYUB2eXP5zw7gpkBWQGesL'];
	$tokens = ['dYPIan1N0sZNvwDiaoSSvL:APA91bG4d749JbScnGIZJw5kzqXS4PRx7yT20XXZGpEpM2WUcY31O3U0PgcFce0Och3iDC54EEz5lNGn2cKxwUlpHCD4idCHG6uBGfY4yyPugv2Q21BG9DuJwlcs7iD3opf7_BsfJuey'];

	$header = [
		'Authorization: Key=' . SERVER_API_KEY,
		'Content-Type: Application/json'
	];

	$msg = [
		'title' => 'Testing Notification',
		'body' => 'Testing Notification from localhost',
		// 'icon' => 'img/icon.png',
		// 'image' => 'img/d.png',
	];

	$payload = [
		'to' 	=> $tokens[0],
		'notification'				=> $msg
	];

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode( $payload ),
	  CURLOPT_HTTPHEADER => $header
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);


	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}

	curl_close($curl);
 ?>