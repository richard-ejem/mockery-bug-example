<?php

use Tester\Assert;
use Tester\TestCase;
use Tracy\Debugger;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/someclass.php';

// Tracy Debugger will stop the app on any error level, making the problem more obvious
Debugger::enable(Debugger::DEVELOPMENT);
Debugger::$strictMode = true;

class FormatObjectsTest extends TestCase
{
    public function testFormatObjects()
    {
        // this triggers E_USER_DEPRECATED
        Assert::match('~^Objects:.*', Mockery::formatObjects([new SomeClass()]));
    }
}

(new FormatObjectsTest())->run();
