<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-vuejs-assets
 */

namespace onmotion\vue;

use yii\web\AssetBundle;


/**
 * Class VueResourceAsset
 * @package onmotion\vue
 */
class VueResourceAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-resource/dist';

    public $js = [
    	'vue-resource.min.js'
    ];
}
