<?php
/**
 * Tests for TokenLoom
 */

use PHPUnit\Framework\TestCase;
use Tokenloom\Tokenloom;

class TokenloomTest extends TestCase {
    private Tokenloom $instance;

    protected function setUp(): void {
        $this->instance = new Tokenloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
