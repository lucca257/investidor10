<?php

namespace App\Applications\Api\Post\Validators;

use App\Domains\Category\Dtos\CategoryDto;
use App\Domains\Post\Dtos\PostDto;
use Illuminate\Foundation\Http\FormRequest;

class StorePostValidator extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'categories' => ['required', 'array'],
        ];
    }

    public function toDTO(): PostDto
    {
        $dto = new PostDto(...$this->validated());
        $dto->categories = [];
        foreach ($this->categories as $title) {
            if (!$title) {
                continue;
            }
            $dto->categories[] = new CategoryDto($title);
        }

        return $dto;
    }
}
