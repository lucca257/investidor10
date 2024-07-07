<?php

namespace App\Domains\Category\Dtos;

class CategoryDto
{
    public function __construct(
        public string $title,
    ) {}
}
