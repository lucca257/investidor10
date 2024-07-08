<?php

namespace App\Applications\Web\Post;

use App\Applications\Api\Post\Validators\StorePostValidator;
use App\Domains\Post\Actions\CreatePostAction;
use App\Domains\Post\Actions\ListPostsAction;
use App\Domains\Post\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;

class PostWebController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('welcome');
    }
}
