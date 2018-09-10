<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-vuejs-assets
 */

namespace onmotion\vue;

use yii\web\AssetBundle;

/**
 * Class VueAsset
 * @package onmotion\vue
 */
class VueAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue/dist';

    public $js = [
    	'vue.min.js'
    ];
}
