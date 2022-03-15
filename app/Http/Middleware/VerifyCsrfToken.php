<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        '/b2b/package/update-package-status',
        '/b2b/category/update-category-status',
        '/b2b/about/update-about-status',
        '/b2b/component/banner/update-banner-status',
    ];
}
