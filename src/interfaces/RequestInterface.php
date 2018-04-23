<?php

namespace albertborsos\pjax\interfaces;

interface RequestInterface
{
    /**
     * Returns whether this is a PJAX request.
     * @return bool whether this is a PJAX request
     */
    public function getIsPjax();
}
