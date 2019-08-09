<?php
header('Access-Control-Allow-Origin: *');// 允许其他域名访问
header('content-type:application/json'); // 输出json格式
$act=$_GET['act'];
switch ($act) {
	case 'version':
		$result=[
			'code' => '0',
			'version' => '4.2.2'
			];
		break;
}
echo json_encode($result);