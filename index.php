<?php
/**
 * @Author: ramadhansutejo
 * @Date:   2016-09-29 11:16:09
 * @Last Modified by:   ramadhansutejo
 * @Last Modified time: 2016-09-29 18:49:37
 */

$releaseDir = 'http://localhost/update/file';
$appName = 'demo-app-';
$appVersion = '1.1';

$updateVar = array(
	'update_status' => TRUE,
	'php_recruitment' => '5.4.45',
	'db_update' => FALSE, 
	'update_link' => $releaseDir.'/'.$appName.$appVersion.'.zip',
	'update_version' => $appVersion,
	'file_name' => $appName.$appVersion.'.zip',
);

echo json_encode($updateVar);
?>