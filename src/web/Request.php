<?php

namespace albertborsos\pjax\web;

use albertborsos\pjax\interfaces\RequestInterface;
use albertborsos\pjax\traits\RequestTrait;

class Request extends \yii\web\Request implements RequestInterface
{
    use RequestTrait;
}
