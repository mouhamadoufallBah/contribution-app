<?php
define('BASE_PATH', dirname(__DIR__));
define('MODEL_PATH', BASE_PATH . '/app/models');
define('VIEWS_PATH', BASE_PATH . '/app/views');
define('CONTROLLER_PATH', BASE_PATH . '/app/controllers');
define('CORE_PATH', BASE_PATH . '/app/core');
define('VALIDATOR_PATH', BASE_PATH . '/app/validators');

require(CORE_PATH.'/sessionManager.php');
initSession();
require_once(CORE_PATH.'/router.php');