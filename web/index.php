<?php
/**
 * Created by PhpStorm.
 * User: serik_lav
 * Date: 2019-03-16
 * Time: 17:46
 */

    require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
    $config = require_once  __DIR__ . '/../config/web.php';
    (new yii\web\Application($config))->run();