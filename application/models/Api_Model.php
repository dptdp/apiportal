<?php

class Api_Model
{
	public function add_sbaccount($username, $password, $account_name)
	{
		$url = "https://api-uat.unionbankph.com/partners/sb/sandbox/v1/accounts";
		$headers = array(
			'Content-Type: application/json',
    		'x-ibm-client-id:' . CLIENT_ID,
    		'x-ibm-client-secret: ' . CLIENT_SECRET
    	);

		$params = array(
			/*'username: hello',
	    	'password: hello',
	    	'account_name: hello'*/
			'username' => $username,
			'password' => $password,
			'account_name' => $account_name
		);
		$params_json = json_encode($params);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params_json);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec($ch);
		$data = json_decode($response);

		if(array_key_exists("errors", $data))
		{
			$result = "error code";
		}
		else
		{
			$result = $data->msg;
		}

		return $result;
	}

	public function branch_atm()
	{
		$sample = "BRANCH AND ATM LOCATIONS";
		return $sample;
	}
}


?>