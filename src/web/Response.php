<?php

namespace albertborsos\pjax\web;

use albertborsos\pjax\interfaces\ResponseInterface;
use albertborsos\pjax\traits\ResponseTrait;

class Response extends \yii\web\Response implements ResponseInterface
{
    use ResponseTrait;
}
