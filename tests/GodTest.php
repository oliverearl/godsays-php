<?php

declare(strict_types=1);

namespace TAD\God\Tests;

use PHPUnit\Framework\TestCase;

class GodTest extends TestCase
{
    public function testGodCanSpeak(): void
    {
        $speech = godsays(2);

        $this::assertNotEmpty($speech);
        $this::assertStringContainsString(' ', $speech);
        $this::assertStringNotContainsString('_', $speech);
    }
}
