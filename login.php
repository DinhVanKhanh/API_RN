<?php
$_POST = json_decode(file_get_contents("php://input"), true);
$infoDB = ["email" => "ab", "pass" => "1234"];
$token = [];
if (!empty($_POST["email"]) && !empty($_POST["pass"])) {
	if ($infoDB["email"] == $_POST["email"] && $infoDB["pass"] == $_POST["pass"]) {
		$token["token"]["email"] = $_POST["email"];
		$token["token"]["pass"] = $_POST['pass'];
		$token["token"]["success"] = true;
	} else {
		$token["token"]["success"] = false;
	}
} else {
	$token["token"]["success"] = false;
}
echo json_encode($token);
die();
