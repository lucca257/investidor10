<?php

namespace App\Domains\Post\Actions;

use App\Domains\Category\Actions\CreateCategoryAction;
use App\Domains\Post\Dtos\PostDto;
use App\Domains\Post\Models\Post;
use Illuminate\Support\Facades\DB;

class CreatePostAction
{
    public function __construct(
        private readonly ClearPostListCacheAction $clearPostListCacheAction,
        private CreateCategoryAction $createCategoryAction
    ) {}

    public function execute(PostDto $postDto): void
    {
        DB::transaction(function () use ($postDto) {
            $post = Post::create([
                'title' => $postDto->title,
                'body' => $postDto->body,
            ]);

            array_map(function ($item) use ($post) {
                $category = $this->createCategoryAction->execute($item)->id;
                $post->categories()->attach($category);
            }, $postDto->categories);
        });

        $this->clearPostListCacheAction->execute();
    }
}
