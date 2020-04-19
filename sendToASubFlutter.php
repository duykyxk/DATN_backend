<?PHP
	function sendMessageFlutter($message, $uid){
		
		$content = array(
			"en" => "$message"
			);
		$fields = array(
			'app_id' => "b6dff1c9-6e72-4d32-aeae-45a9105f09d0",
			'include_player_ids' => array("$uid"),
			'data' => array("foo" => "bar"),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    	// print("\nJSON sent:\n");
    	// print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}
	
	// $response = sendMessage("test notification", "000");
	// $return["allresponses"] = $response;
	// $return = json_encode( $return);
	
	// print("\n\nJSON received:\n");
	// print($return);
	// print("\n");
?>