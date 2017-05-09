<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/someclass.php';
use PHPUnit\Framework\TestCase;


class FormatObjectsTest extends TestCase
{
    public function testFormatObjects()
    {
        // this will pass because PhpUnit's error handler transforms
        // deprecation error into PHPUnit\Framework\Error\Deprecated,
        // which is caught in Mockery::extractGetters()
        $this->assertRegExp('~^Objects:.*~', Mockery::formatObjects([new SomeClass()]));
    }
}

(new FormatObjectsTest())->run();
