<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testCount()
    {
        $collect = new Collect\Collect([13, 17]);
        $this->assertSame(2, $collect->count());
    }

    public function testPush()
    {
        $collect = new Collect\Collect([1, 2]);
        $collect->push(3);
        $this->assertEquals(new Collect\Collect([1, 2, 3]), $collect);
    }

    public function testUnshift()
    {
        $collect = new Collect\Collect([2, 3]);
        $collect->unshift(1);
        $this->assertEquals(new Collect\Collect([1, 2, 3]), $collect);
    }

    public function testShift()
    {
        $collect = new Collect\Collect([1, 2, 3]);
        $collect->shift();
        $this->assertEquals(new Collect\Collect([2, 3]), $collect);
    }
}
