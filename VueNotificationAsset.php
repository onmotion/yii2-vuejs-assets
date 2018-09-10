<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-vuejs-assets
 */

namespace onmotion\vue;

use yii\web\AssetBundle;


/**
 * Class VueNotificationAsset
 * @package onmotion\vue
 */
class VueNotificationAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-notification/dist';

    public $js = [
    	'index.js'
    ];
}
