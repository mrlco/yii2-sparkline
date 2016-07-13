<?php

namespace mrlco\sparkline;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Sparkline
 *
 * @author Mehdi Achour <machour@gmail.com>
 */

/**
 * A wrapper for Jquery Sparkline in Yii2
 *
 * @see https://github.com/mrlco/yii2-sparkline
 * @author Mehran Barzandeh <admin@mrlco.ir>
 */
class Sparkline extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     */
    public $options = [];
    /**
     * @var array Options for the underlying Jquery Sparkline plugin.
     * @see For more info: [Sparkline documentation](http://omnipotent.net/jquery.sparkline/#s-docs)
     */
    public $clientOptions = [];
    /**
     * @var string the tag to generate
     */
    public $tag = 'span';
    /**
     * @var array the data to be displayed
     */
    public $data = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::tag($this->tag, null, $this->options);
        $this->registerClientScript();
    }

    /**
     * Registers required client scripts
     */
    protected function registerClientScript()
    {
        $id = $this->options['id'];
        SparklineAsset::register($this->view);
        $this->view->registerJs(
            sprintf(
                '$("#%s").sparkline(%s, %s)',
                $id,
                Json::encode($this->data),
                !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '{}'
            )
        );
    }
}
