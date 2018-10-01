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
class VueJsModalAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-js-modal/dist';

    public $js = [
        'index.js'
    ];

    public $depends = [
        'onmotion\vue\VueAsset',
    ];
}
