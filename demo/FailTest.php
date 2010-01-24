<?php

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'FailTest::main');
}

class FailTest extends PHPUnit_Framework_TestCase
{
    public static function main()
    {
        $suite  = new PHPUnit_Framework_TestSuite("FailTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * @ticket 1
     * @test
     */
    public function testFail()
    {
        $this->assertTrue(1 === 0);
    }
}

// Call FailTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "FailTest::main") {
    FailTest::main();
}
