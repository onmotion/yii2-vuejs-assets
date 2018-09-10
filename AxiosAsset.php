<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-vuejs-assets
 */

namespace onmotion\vue;

use yii\web\AssetBundle;

/**
 * Class AxiosAsset
 * @package onmotion\vue
 */
class AxiosAsset extends AssetBundle
{
    public $sourcePath = '@npm/axios/dist';

    public $js = [
        'axios.min.js'
    ];

}
