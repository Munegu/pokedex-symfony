<?php

namespace App\Tests;

use Monolog\Test\TestCase;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\ExpectationFailedException;

class ClassTest extends TestCase
{
    /**
     * @throws ExpectationFailedException | \InvalidArgumentException
     */
    public function testAssertTrue(): void
    {
        Assert::assertEquals(true, true);
    }
}
