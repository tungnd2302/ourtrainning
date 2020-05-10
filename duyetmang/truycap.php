<?php 
	// Mảng không có chỉ số
	$mangA = [4,1,2,3,4]; 
	// Mảng có chỉ số
	$mangB = [
		'hoten' => "Vũ Văn Trọng",
		'Tuoi'  => 22,
		'Quequan' => "Nam Định",
	];
	// echo $mangB["hoten"];
	// foreach ($mangB as $key => $value) {
	// 	echo $key . '<br/>';
	// }
	// Rút gọn
	foreach ($mangB as $value) {
		echo $value . '<br/>';
	}

?>