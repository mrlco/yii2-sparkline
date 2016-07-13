<?php

namespace mrlco\sparkline;

use yii\web\AssetBundle;

/**
 * Jquery Sparkline Plugin Asset
 *
 * @author Mehran Barzandeh <admin@mrlco.ir>
 */
class SparklineAsset extends AssetBundle
{
    public $sourcePath = '@bower/bower-jquery-sparkline/dist';
    public $js = ['jquery.sparkline.retina.js'];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
