<?php

namespace App\Domains\Post\Actions;

use App\Domains\Post\Models\Post;

class SearchPostAction
{
    public function execute(string $searchTerm)
    {
        $data = Post::where('title', 'like', "%$searchTerm%")
            ->orWhere('body', 'like', "%$searchTerm%")
            ->with('categories');

        if (!$data->exists()) {
            $data = Post::whereHas('categories', function ($query) use ($searchTerm) {
                $query->where('title', 'like', "%{$searchTerm}%");
            })->with('categories');
        }
        return $data->orderBy('updated_at', 'DESC')->paginate(9);
    }
}
