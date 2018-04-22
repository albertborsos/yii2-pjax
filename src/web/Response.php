<?php

namespace albertborsos\pjax\web;

use Yii;
use yii\helpers\Url;

class Response extends \yii\web\Response
{
    public function redirect($url, $statusCode = 302, $checkAjax = true)
    {
        /** @var Request $request */
        $request = Yii::$app->getRequest();
        if (is_array($url) && isset($url[0])) {
            // ensure the route is absolute
            $url[0] = '/' . ltrim($url[0], '/');
        }
        $url = Url::to($url);
        if (strpos($url, '/') === 0 && strpos($url, '//') !== 0) {
            $url = $request->getHostInfo() . $url;
        }

        if ($checkAjax) {
            if ($request->getIsAjax()) {
                if ($request->hasHeader('X-Ie-Redirect-Compatibility') && $statusCode === 302) {
                    // Ajax 302 redirect in IE does not work. Change status code to 200. See https://github.com/yiisoft/yii2/issues/9670
                    $statusCode = 200;
                }
                if ($request instanceof Request && $request->getIsPjax()) {
                    $this->setHeader('X-Pjax-Url', $url);
                } else {
                    $this->setHeader('X-Redirect', $url);
                }
            } else {
                $this->setHeader('Location', $url);
            }
        } else {
            $this->setHeader('Location', $url);
        }

        $this->setStatusCode($statusCode);

        return $this;
    }
}
