<?php

declare(strict_types=1);

/** @var Illuminate\Routing\Router $router */

$router->get('/', static fn () => response()->json());
