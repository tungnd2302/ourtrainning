<?php 
	// Mảng không có chỉ số
	$mangA = [0,1,2,3,4]; 
	// Mảng có chỉ số
	$mangB = [
		'hoten' => "Vũ Văn Trọng",
		'Tuoi'  => 22,
		'Quequan' => "Nam Định",
	];
	$mangA[5] = "Vũ Văn Trọng";
	$mangA['hehehe'] = "Vũ Văn Trọng";
	$mangA['mlem'] = "aaa";
	echo '<pre>';
	print_r($mangA);

?>