<?php
$method = $_SERVER['REQUEST_METHOD'];
// b15_29045120_db_data

$message = '';
$admin_email = 'andreww1762@gmail.com'; // 
$email_from = 'andrew1562@yandex.ru'; // 
if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']=='POST')) {

	$mess_email = trim(htmlspecialchars($_POST["email"]));
	$mess_tel  = trim(htmlspecialchars($_POST["phone"]));
	$form_subject = "заявка - Андрей Ванжа";

	$message .= 'email: ' . $mess_email . PHP_EOL;
	$message .= 'Телефон: ' . $mess_tel . PHP_EOL;
} 

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt("sender").' <'.$email_from.'>' . PHP_EOL .
'Reply-To: '.$mess_email.'' . PHP_EOL;

//mail($admin_email, adopt($form_subject), $message, $headers);
mail($admin_email, adopt($form_subject), $message);

//echo $message;
//echo json_encode('OK');


/** amoCRM */
$subdomain = 'karnaushkina'; //Поддомен нужного аккаунта
$link = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token'; //URL для запроса

/** Собераю данные для запроса */
$data = [
	// id моей интеграции
	'client_id' => 'e7a86938-dc5b-45f7-997b-001acc9c8120', 
	// секретный ключ моей интеграции
	'client_secret' => 'ySp8myD1cnrDVLkWtw59CjFq0ubPE67e81RF0aRCPssybSMJ6Yo85xUzOxW9bI4A', 
	'grant_type' => 'authorization_code',
	// код авторизации моей интеграции
	'code' => 'def502005375a42b6219b6797b4a1a4ae7cd91b7620aed08a22149a9c339d74c15ba2b7683f629de51871cd8b416f90165c235f7d2c75fc92bdd7fcb4bff4c18fbbfe258002c8bf07b0afb59d597aab9558e2fb67768c17f6fe45668b093094d2f9bee50f3b8ffd241dca4593184a5e5d533b82145c38e87df362a42f50316655a2605c89b7b3214a40c9fc816d5def485d166541022000cc5d878b40446eb738a497c4e297e0be62f4b0e6e67a42bfdbd7007f275379098ae5709d69698cceaf7972080351e582deb7ff4c8411c84bc4de44da9bb082a921bb4c1c10339e9769db0d2d1567f1dc3c646107c9691389bb42f052a8c600db63aa8b6cb1faa74219ad062d031a6616a4ae5f492c614768dc9fe4a2dd31de5dfdbb7d0eee4a3724c00a893efb46531e40dbd1e57c1dd3adb66ba5a1de97763d0f459e8d121f708884c47382602429c5a03c03fc8a767187e8f0886d597e77932db73bc1a4dee5b9cdd143826a1c84771fe2fada09ecd78bd609917e4ecfa48da047e8525dbbb0d3be864af36e0a825c34dbf04c9a8729604e6b568ee5fe8cea17a13a887ee12e8e66341753b9c77aba19eb1108d2083513437e8e7de4f7874df3a0613fa34931d52350c43ac97f44ece85c490',
	// домен сайта моей интеграции
	'redirect_uri' => 'https://bitrix.andreww1000.h1n.ru',
];

// andreww1000
// секретный ySp8myD1cnrDVLkWtw59CjFq0ubPE67e81RF0aRCPssybSMJ6Yo85xUzOxW9bI4A
// ID интеграции e7a86938-dc5b-45f7-997b-001acc9c8120
// код авторизации def502005375a42b6219b6797b4a1a4ae7cd91b7620aed08a22149a9c339d74c15ba2b7683f629de51871cd8b416f90165c235f7d2c75fc92bdd7fcb4bff4c18fbbfe258002c8bf07b0afb59d597aab9558e2fb67768c17f6fe45668b093094d2f9bee50f3b8ffd241dca4593184a5e5d533b82145c38e87df362a42f50316655a2605c89b7b3214a40c9fc816d5def485d166541022000cc5d878b40446eb738a497c4e297e0be62f4b0e6e67a42bfdbd7007f275379098ae5709d69698cceaf7972080351e582deb7ff4c8411c84bc4de44da9bb082a921bb4c1c10339e9769db0d2d1567f1dc3c646107c9691389bb42f052a8c600db63aa8b6cb1faa74219ad062d031a6616a4ae5f492c614768dc9fe4a2dd31de5dfdbb7d0eee4a3724c00a893efb46531e40dbd1e57c1dd3adb66ba5a1de97763d0f459e8d121f708884c47382602429c5a03c03fc8a767187e8f0886d597e77932db73bc1a4dee5b9cdd143826a1c84771fe2fada09ecd78bd609917e4ecfa48da047e8525dbbb0d3be864af36e0a825c34dbf04c9a8729604e6b568ee5fe8cea17a13a887ee12e8e66341753b9c77aba19eb1108d2083513437e8e7de4f7874df3a0613fa34931d52350c43ac97f44ece85c490

// andreww1762
// секретный mP8sBY1N82HzIPKmTg5fhLOqHqgVqkn7bp768hElyjznxsbl4qBl2BQ8hdmf03Y8
// ID интеграции 441f0720-719d-4ad1-9c9b-d235a8f8f0fd
// код авторизации def50200fd3571c223dd29490b73494ca0879ec0ec3b75f319f2209213ca73d7cee50c3095e47b9bac8dee0d869b5857ff8ad4464b58c61480798c6239c48c95949f126d351c3a4e2f968a57debc84add3fa6ed4e51df9a108f4f8f37c1213271783c32321e3b91af9e218cae49c20094f8ca473b8df9c59ceff19afb37e2b81b00a5ca6453c355c9395ccf6fc9397160d1e80b1bd5cb34299612c7d12493bf7f6abf473a3cb9349497dab97e407d41f1cf270f0e9ec900651d5a9769e82abbb1a6edcb67d4c09292c0d32a03f77510d4ef14f5c06887dce728b19b56c924970565691c9db8ca3f2b6f1ab5576b71921748d5579d23f51bf22e3eb7724a03065e21e630750dacdf3eaebe216af839fff9d79a958faa2a9335f51b427d4026a67d880048b032a37d1f34cc8fe4404470420f654be3e4fbc8edc91111971708eb67e31719010532843817a54aab638c9a494743e213d847e1a2544546ea76a2c3219c65d3aa2f08e3f548d32c4d6c8f39d242fcdb16ae09dca6790f6f75677c87b17516f99d7a1a84318dd8de41305e991e167e3ba18cb8c8efdc536fb120f77768a7aabc0ef5149c6ce96342a0602a3feb19a1597735db0abd8977b36ee2ca5a192cfb530a5961e155d97717d3d

if(false) { // токен получен
// Инициация запроса к серверу.
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link);
curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
curl_setopt($curl,CURLOPT_HEADER, false);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
// Ответ, полученный от сервера. 
$code = (int)$code;

// коды возможных ошибок
$errors = [
	400 => 'Bad request',
	401 => 'Unauthorized',
	403 => 'Forbidden',
	404 => 'Not found',
	500 => 'Internal server error',
	502 => 'Bad gateway',
	503 => 'Service unavailable',
];
//echo json_encode($code);

try
{
	// Если код ответа не успешный - возвращаю сообщение об ошибке 
	if ($code < 200 || $code > 204) {
		throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undefined error', $code);
	}
}
catch(\Exception $e)
{
	die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
}

$response = json_decode($out, true); // Данные в формате JSON

$access_token = $response['access_token']; //Access токен
$refresh_token = $response['refresh_token']; //Refresh токен
$token_type = $response['token_type']; //Тип токена
$expires_in = $response['expires_in']; //Через сколько действие токена истекает

// выведем наши токены. Скопируйте их для дальнейшего использования
// access_token будет использоваться для каждого запроса как идентификатор интеграции
echo json_encode($access_token);
//echo json_encode($refresh_token);
$file = 'access1.txt';
file_put_contents($file, $access_token);
$file = 'refresh.txt';
file_put_contents($file, $refresh_token);
}

$access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjFkOTI3NmQzMzdiNTM5OWY3NzJjOTA4MDFhZTI1NmFkMGY0OGExOWY4Mjg0YWIxNjM2OTQ3ZWJkYzRhZDE1ZmFkNTBhMWE1OTMxN2UwYTU0In0.eyJhdWQiOiJlN2E4NjkzOC1kYzViLTQ1ZjctOTk3Yi0wMDFhY2M5YzgxMjAiLCJqdGkiOiIxZDkyNzZkMzM3YjUzOTlmNzcyYzkwODAxYWUyNTZhZDBmNDhhMTlmODI4NGFiMTYzNjk0N2ViZGM0YWQxNWZhZDUwYTFhNTkzMTdlMGE1NCIsImlhdCI6MTYyNTQzMzI3OCwibmJmIjoxNjI1NDMzMjc4LCJleHAiOjE2MjU1MTk2NzcsInN1YiI6IjcxOTAwNzEiLCJhY2NvdW50X2lkIjoyOTU2MjQzMCwic2NvcGVzIjpbInB1c2hfbm90aWZpY2F0aW9ucyIsImNybSIsIm5vdGlmaWNhdGlvbnMiXX0.m8iJHIs-P6mPcQXomqKpP_eD3UMrRzcPIwVZ2RwT2jmVBpI9f59m-nNOJ21RuwoPkh5vO_WO80K1rTw-IiBV_55xvi2JTgH8Q3CuuJYdMOSnghLbsfYqnYcUaElk2wETp9vcNZYQLAUNacPEiz1aESeibvy9GsryFzo9Mbi1QV5SB0NZ_-fdwpDMU34fL7Y7fjN7up3tH0LlaUnlfn_1BFm-nXIn6SF2SZcHuDSJ2ctbXjV7Lps_9P-lfd6Nm08aNV673tzJeC_m5moyQquSlZGu0-0V_ev2kqi92ID_9-enW5oZvYf-7lr_QmGRMLzEFnshtvm07psyNfwppHKfPg';

$arrContactParams = [
	"CONTACT" => [
		"namePerson"	=> "Андрей Ванжа",
		"phonePerson"	=> $mess_tel,
		"emailPerson"	=> $mess_email,
		"messagePerson"	=> "Заявка",
	],
];

if($arrContactParams["CONTACT"]) {
	//returnFieldsContact($access_token);
	$idContact = amoAddContact($access_token, $arrContactParams);
}

function amoAddContact($access_token, $arrContactParams) {
	$contacts['request']['task']['add'] = [
		'name' => $arrContactParams["CONTACT"]["namePerson"],
		'tags' => 'Заявка',
		'element_type' => 2, //сделка=2, контакт=12
		'task_type' => 1,
		'custom_fields'	=> [
			// ИМЯ ПОЛЬЗОВАТЕЛЯ 
			[
				'id'	=> 1001,
				'values' => [
					[
						"value" => $arrContactParams["CONTACT"]["namePerson"],
					]
				],
			],
			// ТЕЛЕФОН
			[
				'id'	=> 1002,
				'values' => [
					[
						"value" => $arrContactParams["CONTACT"]["phonePerson"],
					]
				],
			],
			// EMAIL
			[
				'id'	=> 1003,
				'values' => [
					[
						"value" => $arrContactParams["CONTACT"]["emailPerson"],
					]
				],
			],
			// СООБЩЕНИЕ
			[
				'id'	=> 1004,
				'values' => [
					[
						"value" => $arrContactParams["CONTACT"]["messagePerson"],
					]
				],
			],
		],
	];
	$contact = [
		'add'=> [
			'name' => $arrContactParams["CONTACT"]["namePerson"],
			'tags' => 'Заявка',
			'pipeline_id'=> "41563",
			'incoming_entities'=> [
				'contacts'=> [
					'name'=> $arrContactParams["CONTACT"]["namePerson"],
					'custom_fields'=> [
						[
							'id'=> "1000",
							'values'=> [
								'value'=> $arrContactParams["CONTACT"]["emailPerson"],
								'enum'=> "WORK"
							]
						],
						[
							'id'=> "1001",
							'values'=> [
								'value'=> $arrContactParams["CONTACT"]["phonePerson"],
								'enum'=> "WORK"
							]
						],
					]
				]
			]
		]
	];
	$json_contact = json_encode($contacts);

	$headers = [
		"Accept: application/json",
		'Authorization: Bearer ' . $access_token
	];
	$link = 'https://' . 'karnaushkina' . '.amocrm.ru/oauth2/access_token'; //URL для запроса

	$curl = curl_init(); //дескриптор сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
	curl_setopt($curl,CURLOPT_URL, $link);
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($json_contact));
	curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl,CURLOPT_HEADER, false);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
	$out = curl_exec($curl); //Запрос к API и сохраняю ответ
	$code = curl_getinfo($curl,CURLINFO_HTTP_CODE);
	curl_close($curl);

	//print_r($amo->account->apiCurrent());
	$response = json_decode($out,true);
	echo 'amoAddContact=';

	$account = $response['response']['account'];
	echo '<b>Данные о пользователе:</b>'; echo '<pre>'; print_r($response); echo '</pre>';

	return $response["response"]["contacts"]["add"]["0"]["id"];
}


function returnFieldsContact($access_token) {
	$headers = [
		"Accept: application/json",
		'Authorization: Bearer ' . $access_token
	];

	$link = 'https://' . 'karnaushkina' . '.amocrm.ru/oauth2/access_token'; //URL для запроса

	$curl = curl_init(); //Сохраняем дескриптор сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
	curl_setopt($curl,CURLOPT_URL, $link);
	curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl,CURLOPT_HEADER, false);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
	$out=curl_exec($curl); 
	$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
	curl_close($curl);

	$response = json_decode($out,true);
	echo 'returnFieldsContact=';
	print_r($response);

	$account = $response['response']['account'];
}