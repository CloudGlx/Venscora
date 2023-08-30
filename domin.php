<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://whoisapi-whois-v2-v1.p.rapidapi.com/whoisserver/WhoisService?domainName=whoisxmlapi.com&outputFormat=XML&da=0&ipwhois=0&thinWhois=0&_parse=0&preferfresh=0&checkproxydata=0&ip=0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: whoisapi-whois-v2-v1.p.rapidapi.com",
		"X-RapidAPI-Key: 96120a4e1dmshdc8e5ebf51aca9ap136452jsn5828d5b861bb"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}