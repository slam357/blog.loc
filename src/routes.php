<?php

return [
    '~^articles/(\d+)$~' => [\blog\Controllers\ArticlesController::class, 'view'],
    '~^$~' => [\blog\Controllers\MainController::class, 'main'],
];