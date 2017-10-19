<?php

namespace fbalabanov\widgets\modal;

use yii\web\AssetBundle;

/**
 * Class ModalAjaxAsset
 * @package fbalabanov\widgets\modal
 * @author Felix Balabanov <fbalabanov@aol.com>
 */
class ModalAjaxAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/kb-modal-ajax.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/modal-colors.css',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}
