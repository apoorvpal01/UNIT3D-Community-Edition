<?php

use Tests\TestCase;

uses(TestCase::class);

/**
 * @see \App\Http\Requests\StorePoll
 */
beforeEach(function () {
    $this->subject = new \App\Http\Requests\StorePoll();
});

test('authorize', function () {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function () {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->rules();

    $this->assertEquals([], $actual);
});

test('messages', function () {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->messages();

    $this->assertEquals([], $actual);
});
