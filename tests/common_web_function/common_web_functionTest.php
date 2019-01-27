<?php
require_once( __DIR__ . '/../../src/common_web_function.php' );
use PHPUnit\Framework\TestCase;
use Hikarine3\CommonWebFunction;

class CommonWebFunctionTest extends TestCase
{
    private $cwf;

    public function testConstruct() {
        $this->cwf = new CommonWebFunction;
        $this->assertInstanceOf(
            "Hikarine3\CommonWebFunction",
            $this->cwf
        );
    }

    public function testFunc() {
        $this->cwf = new CommonWebFunction;
        $this->assertEquals( $this->cwf->normalize_str(" ＡB　ｳﾞｧｶでぇ１     ") , "ab ヴァカでぇ1");
    }
}
