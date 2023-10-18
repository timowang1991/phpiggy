<?php

declare(strict_types=1);

include __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\{HomeController, AboutController};

$app = new App();

$app->get('/', [HomeController::class, 'home']);
$app->get('/about', [AboutController::class, 'about']);

// dd($app);

return $app;
