<?php

use App\Models\Ban;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class);
uses(RefreshDatabase::class);

/**
 * @see \App\Http\Controllers\Staff\BanController
 */
test('index returns an ok response', function () {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.bans.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.ban.index');
    $response->assertViewHas('bans');

    // TODO: perform additional assertions
});

test('store returns an ok response', function () {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $ban = Ban::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('staff.bans.store', ['username' => $ban->username]), [
        // TODO: send request data
    ]);

    $response->assertRedirect(withErrors($v->errors()));

    // TODO: perform additional assertions
});

test('update returns an ok response', function () {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $ban = Ban::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('staff.bans.update', ['username' => $ban->username]), [
        // TODO: send request data
    ]);

    $response->assertRedirect(withErrors($v->errors()));

    // TODO: perform additional assertions
});
