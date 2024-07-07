<?php

namespace App\Domains\Category\Actions;

use App\Domains\Category\Dtos\CategoryDto;
use App\Domains\Category\Models\Category;

class CreateCategoryAction
{
    public function execute(CategoryDto $categoryDto)
    {
        return Category::firstOrCreate(
            ['title' => $categoryDto->title],
            ['title' => $categoryDto->title],
        );
    }
}
