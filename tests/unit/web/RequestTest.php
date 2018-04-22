<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiiunit\framework\web;

use albertborsos\pjax\web\Request;
use yiiunit\TestCase;

/**
 * @group web
 */
class RequestTest extends TestCase
{
    public function getIsPjaxDataProvider()
    {
        return [
            [
                [],
                false,
            ],
            [
                [
                    'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest',
                    'HTTP_X_PJAX' => 'any value',
                ],
                true,
            ],
        ];
    }

    /**
     * @dataProvider getIsPjaxDataProvider
     * @param array $server
     * @param bool $expected
     */
    public function testGetIsPjax($server, $expected)
    {
        $original = $_SERVER;
        $_SERVER = $server;
        $request = new Request();

        $this->assertEquals($expected, $request->getIsPjax());
        $_SERVER = $original;
    }
}
