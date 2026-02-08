<?php

use Pano\Modules\Default\DefaultModule;

return [
    'pano' => env('APP_ENV','production') === 'local' ? DefaultModule::class : null,
    '' => \Modules\Default\DefaultModule::class,
];