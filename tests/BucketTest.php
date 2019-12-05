<?php

namespace Tests;

use MilesChou\Toggle\Processors\Bucket;
use PHPUnit\Framework\TestCase;

class BucketTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnFalseWithBucketIs0()
    {
        $target = Bucket::create(0);

        $this->assertFalse($target());
    }

    /**
     * @test
     */
    public function shouldReturnTrueWithBucketIs100()
    {
        $target = Bucket::create(100);

        $this->assertTrue($target());
    }
}
