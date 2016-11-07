<?php

return [


    'paths' => [
        realpath(base_path('/resources/views')),
    ],


    'compiled' => getenv('VIEW_CACHE_PATH', realpath(base_path('/storage/framework/views'))),

];

