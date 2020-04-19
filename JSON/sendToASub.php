<?PHP
	function sendMessage($message, $uid){
		
		$content = array(
			"en" => "$message"
			);
		$fields = array(
			'app_id' => "6cacd0aa-58ab-416c-be82-6b59480ab534",
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
	
	// $response = sendMessage();
	// $return["allresponses"] = $response;
	// $return = json_encode( $return);
	
	// print("\n\nJSON received:\n");
	// print($return);
	// print("\n");
?>