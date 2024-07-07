<?php

use App\Domains\Category\Models\Category;
use App\Domains\Post\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;

uses(RefreshDatabase::class);

it('should list posts', function () {
    $posts = Post::factory(10)->create();

    expect(Cache::has('post-page-1'))->toBeFalse();

    $this->getJson(route('posts.index'))
        ->assertOk()
        ->assertJsonCount($posts->count(), 'data');

    expect(Cache::has('post-page-1'))->toBeTrue();
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

it('should create post', function () {
    $category = Category::factory()->create();
    $postCreateDataMock = [
        'title' => 'any title',
        'body' => 'any body example',
        'categories' => [
            'category1',
            'category2',
            $category->title,
        ],
    ];

    Cache::put('post-page-1', []);

    $this->postJson(route('posts.store', $postCreateDataMock))->assertOk();

    $this->assertDatabaseHas('posts', [
        'title' => $postCreateDataMock['title'],
        'body' => $postCreateDataMock['body'],
    ]);

    foreach ($postCreateDataMock['categories'] as $category) {
        $this->assertDatabaseHas('categories', [
            'title' => $category,
        ]);
    }
    $this->assertDatabaseCount('categories', 3);
    expect(Cache::has('post-page-1'))->toBeFalse();
});
