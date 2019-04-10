<?php
// ensure we get report on all possible php errors
error_reporting(E_ALL);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
define('YII_ENV', 'test');

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@vxm/test/unit/desktopNotifier', __DIR__);
Yii::setAlias('@vxm/desktopNotifier', dirname(__DIR__) . '/src');
