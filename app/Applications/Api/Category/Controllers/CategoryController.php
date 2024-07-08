<?php

namespace App\Applications\Api\Category\Controllers;

use App\Domains\Category\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all()->unique('title'));
    }
}
