<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;

    $title = 'Заявка с личного сайта';
	$admin_email  = 'konstantinstepanyan2313@gmail.com';

    $message = '';
    $title = 'Письмо с сайта Йога-Туры в Индию';
    $from='From: ';

    $data = [
        "name"=>trim($_POST["name"]),
        "email"=>trim($_POST["email"]),
    ];

if ( $method === 'POST' ) {

		if ( $data["name"] != "" && $data["email"] != "" ) {

            $message .= "Привет! Меня зовут: ";
            $message .= $data["name"];
            $message .= "!\r\nМоя почта: ";
            $message .= $data["email"];

            $from .= $data["email"];
		}

	
} /* 

else  {

	$project_name = trim($_GET["project_name"]);
	$admin_email  = trim($_GET["admin_email"]);
	$form_subject = trim($_GET["form_subject"]);

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message = "";
		}
	}
}
потом доделаю...
*/


mail($data["email"], $title, $message, $from);

$message='';
$from='From: ';
