<?php

use App\Models\Group;
use App\Models\User;
use Database\Seeders\GroupsTableSeeder;
use Tests\TestCase;

uses(TestCase::class);

/**
 * @see \App\Http\Controllers\Staff\CheaterController
 */
beforeEach(function () {
});

test('index returns an ok response', function () {
    $this->seed(GroupsTableSeeder::class);

    $user = createStaffUser();

    $response = $this->actingAs($user)->get(route('staff.cheaters.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.cheater.index');
    $response->assertViewHas('cheaters');
});

// Helpers
function createStaffUser()
{
    return User::factory()->create([
        'group_id' => fn () => Group::factory()->create([
            'is_owner' => true,
            'is_admin' => true,
            'is_modo'  => true,
        ])->id,
    ]);
}
