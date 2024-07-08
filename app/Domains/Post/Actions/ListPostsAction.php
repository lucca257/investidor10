<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\Models\Post;
use Illuminate\Support\Facades\Cache;

class ListPostsAction
{
    /**
     * @return mixed
     */
    public function execute(int $page)
    {
        return Cache::remember("post-page-$page", 60, function () {
            return Post::orderBy('updated_at', 'DESC')->with('categories')->paginate(9);
        });
    }
}
