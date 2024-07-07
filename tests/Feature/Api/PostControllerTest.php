<?php

use App\Domains\Category\Models\Category;
use App\Domains\Post\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('should list posts', function () {
    $posts = Post::factory(10)->create();
    $this->getJson(route('posts.index'))
        ->assertOk()
        ->assertJsonCount($posts->count(), 'data');
});

it('should list details from post', function () {
    $post = Post::factory()->create();
    $post->load('categories');
    $this->getJson(route('posts.show', ['post' => $post]))
        ->assertOk()
        ->assertJson($post->toArray());
});

it('should validate request fields on create post', function () {
    $postCreateDataMock = [
        'title' => null,
        'body' => null,
    ];
    $this->postJson(route('posts.store', $postCreateDataMock))
        ->assertJsonValidationErrors(['title', 'body', 'categories']);
});

it('should create post with categories that not exists', function () {
    $postCreateDataMock = [
        'title' => 'any title',
        'body' => 'any body example',
        'categories' => [
            'category1',
            'category2',
            'category3',
        ],
    ];
    $this->postJson(route('posts.store', $postCreateDataMock))->assertOk();

    $this->assertDatabaseHas('posts', [
        'title' => $postCreateDataMock['title'],
        'body' => $postCreateDataMock['body'],
    ]);

    foreach ($postCreateDataMock['categories'] as $category) {
        $this->assertDatabaseHas('categories', [
            'title' => $category
        ]);
    }
});

it('should create post with categories that exists', function () {
    $categories = Category::factory(2)->create();
    $postCreateDataMock = [
        'title' => 'any title',
        'body' => 'any body example',
        'categories' => $categories->pluck('title')->toArray()
    ];

    $this->postJson(route('posts.store', $postCreateDataMock))->assertOk();

    $this->assertDatabaseHas('posts', [
        'title' => $postCreateDataMock['title'],
        'body' => $postCreateDataMock['body'],
    ]);

    $this->assertDatabaseCount('categories', 2);
});
