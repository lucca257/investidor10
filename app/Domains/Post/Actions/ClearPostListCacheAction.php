<?php

namespace App\Domains\Post\Actions;

use Illuminate\Support\Facades\Cache;

class ClearPostListCacheAction
{
    public function execute(): void
    {
        for ($page = 1; $page <= 100; $page++) {
            $key = "ost-page-$page";
            if (Cache::has($key)) {
                Cache::forget($key);
            } else {
                break;
            }
        }
    }
}
