<?php

namespace albertborsos\pjax\interfaces;

interface ResponseInterface
{
    public function redirect($url, $statusCode = 302, $checkAjax = true);
}
