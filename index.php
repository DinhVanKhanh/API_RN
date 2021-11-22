<?php
// header("Location: /saag_kiyaku_201805.pdf");
// die();
// if (empty($_POST['access'])) {
// 	$file_url = 'http://192.168.3.211:8003/assets/images/saag_kiyaku_201805.pdf';
// 	// $file_url = '/saag_kiyaku_201805.pdf';
// 	// $file_url = 'http://192.168.3.211:8003/assets/images/WeKakutei2021.exe';

// 	// $aliasedFile = '/assets/images/saag_kiyaku_201805.pdf';
// 	// $aliasedFile = '/saag_kiyaku_201805.pdf';
// 	// $aliasedFile = "./public/assets/images/saag_kiyaku_201805.pdf";
// 	// $aliasedFile = "../../../public/assets/images/saag_kiyaku_201805.pdf";
// 	// $aliasedFile = "./assets/images/saag_kiyaku_201805.pdf";


// 	header('content-type: application/octet-stream');
// 	// header('Content-Type: application/pdf');
// 	header('x-content-type-options: nosniff');
// 	// header('content-length: ' . filesize($filepath));    // クロスドメインのファイルはサイズを取得できないのでコメント
// 	header('content-disposition: attachment; filename="' . basename($file_url) . '"');
// 	// header('X-Accel-Redirect: /assets/images/saag_kiyaku_201805.pdf');
// 	header('connection: close');

// 	while (ob_get_level()) {
// 		ob_end_clean();
// 	}

// 	// header("Location: " . $file_url);
// 	readfile($file_url);
// 	http_response_code(200);

// 	exit;
// }
// die();
?>

<?php

$categories = [
	"categories" =>
	[
		["id" => 4, "name" => '4a'],
		["id" => 5, "name" => '5b'],
		["id" => 6, "name" => '6c'],
	]
];

echo json_encode($categories);
die();
