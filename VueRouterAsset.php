<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-vuejs-assets
 */

namespace onmotion\vue;

use yii\web\AssetBundle;

/**
 * Class VueRouterAsset
 * @package onmotion\vue
 */
class VueRouterAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-router/dist';

    public $js = [
        'vue-router.min.js'
    ];
}
