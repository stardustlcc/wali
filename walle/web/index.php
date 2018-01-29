<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);

// Include local configuration first so we can set the YII_* constants there
//$local = require(__DIR__.'/../config/local.php');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

/*$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/../config/web.php'),
    require(__DIR__.'/../config/main-local.php'), $local);*/

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/../config/web.php'),
    require(__DIR__.'/../config/main-local.php'),
    require(__DIR__.'/../config/local.php')
);

(new yii\web\Application($config))->run();
