<?php

namespace Delzdev\Pixel;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../public/js/pixel.js'
    ];

    protected $fieldtypes = [
        Pixel::class,
    ];
}
