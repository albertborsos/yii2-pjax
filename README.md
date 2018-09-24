[![Latest Stable Version](https://poser.pugx.org/albertborsos/yii2-pjax/v/stable)](https://packagist.org/packages/albertborsos/yii2-pjax) [![Total Downloads](https://poser.pugx.org/albertborsos/yii2-pjax/downloads)](https://packagist.org/packages/albertborsos/yii2-pjax) [![License](https://poser.pugx.org/albertborsos/yii2-pjax/license)](https://packagist.org/packages/albertborsos/yii2-pjax)

[![Build Status](https://travis-ci.org/albertborsos/yii2-pjax.svg?branch=master)](https://travis-ci.org/albertborsos/yii2-pjax)

Yii 2.0 pjax extension
======================

Classes in this extension are copied from Yii 2.0 repository

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

run

```
composer require --prefer-dist albertborsos/yii2-pjax
```

or for Yii 3.0

```
composer require albertborsos/yii2-pjax:1.0.x-dev
```

Usage
-----

Use the pjax compatible request and response classes in your application's `web.php` configuration file:

```php
<?php

return [
    ...
    'components' =>[
        ...
        'request' => [
            'class' => \albertborsos\pjax\web\Request::class,
        ],
        'response' => [
            'class' => \albertborsos\pjax\web\Response::class,
        ],
        ...
    ],
    ...
];

```

### Or

You can use your own `Request` and `Response` classes with the mandatory interfaces (`\albertborsos\pjax\interfaces\RequestInterface` and `\albertborsos\pjax\interfaces\ResponseInterface`) and with the optional traits (`\albertborsos\pjax\traits\RequestTrait` and `\albertborsos\pjax\traits\ResponseTrait`).

Documentation
-------------

https://www.yiiframework.com/doc/api/2.0/yii-widgets-pjax
