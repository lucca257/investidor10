<?php

namespace App\Applications\Api\Post\Controllers;

use App\Applications\Api\Post\Validators\StorePostValidator;
use App\Domains\Post\Actions\CreatePostAction;
use App\Domains\Post\Actions\ListPostsAction;
use App\Domains\Post\Actions\SearchPostAction;
use App\Domains\Post\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use function request;

class PostApiController extends Controller
{
    public function index()
    {
        return app(ListPostsAction::class)->execute(request('page', 1));
    }

    public function show(Post $post): JsonResponse
    {
        $post->load('categories');

        return response()->json($post);
    }

    public function store(StorePostValidator $request)
    {
        app(CreatePostAction::class)->execute($request->toDTO());

        return response()->json();
    }

    public function search(string $searchTerm)
    {
        $data = app(SearchPostAction::class)->execute($searchTerm);
        return response()->json($data);
    }
}
