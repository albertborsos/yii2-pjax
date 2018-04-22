<?php

namespace albertborsos\pjax\web;

class Request extends \yii\web\Request
{
    /**
     * Returns whether this is a PJAX request.
     * @return bool whether this is a PJAX request
     */
    public function getIsPjax()
    {
        return $this->getIsAjax() && $this->hasHeader('x-pjax');
    }
}
