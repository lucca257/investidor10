<?php

namespace App\Domains\Post\Dtos;

class PostDto
{
    public function __construct(
        public string $title,
        public string $body,
        public array $categories
    ) {}
}
