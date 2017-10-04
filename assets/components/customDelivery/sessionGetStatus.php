<?php
	define('MODX_API_MODE', true);
	require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/index.php';

	$modx->getService('error','error.modError');
	$modx->setLogLevel(modX::LOG_LEVEL_ERROR);
	$modx->setLogTarget('FILE');
	if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {
	  	$modx->sendRedirect($modx->makeUrl($modx->getOption('site_start'),'','','full'));
	}
	echo $_SESSION['statusDelivery'];
	die();

?>