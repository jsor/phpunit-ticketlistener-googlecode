<?php

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'PassTest::main');
}

class PassTest extends PHPUnit_Framework_TestCase
{
    public static function main()
    {
        $suite  = new PHPUnit_Framework_TestSuite("PassTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }
    
    /**
     * @ticket 1
     * @test
     */
    public function testPass()
    {
        $this->assertTrue(1 === 1);
    }
}

// Call PassTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "PassTest::main") {
    PassTest::main();
}
