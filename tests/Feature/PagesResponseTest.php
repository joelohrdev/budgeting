<?php

use App\Models\User;
use function Pest\Laravel\get;

it('returns a successful response for home page', function () {
    // Act & Assert
    get(route('home'))
        ->assertOk();
});

test('bills page is displayed', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get(route('bills.index'));

    $response->assertOk();
});
