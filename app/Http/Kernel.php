<?php

namespace App\Http;
use Illuminate\Http\Request;
class Kernel 
{
    protected $routeMiddleware = [
        // ...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
}