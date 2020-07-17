<?php

/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

namespace themes\basic;

use framework\components\Bundle;
use framework\components\AssetManager;

class BasicBundle extends Bundle
{
    public  $sourcePath = '@themes/basic/res';

    public  $js = [
        'js/main.js'
    ];
    public  $css = [
        'css/style.css'
    ];

    public $depends = [
        'framework\\assets\\jquery\\JqueryBundle'
    ];
}