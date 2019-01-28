<?php
require_once( __DIR__ . '/../../src/CommonWebFunction.php' );
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
        $this->assertEquals( $this->cwf->normalize_str(" Ａ          B　ｳﾞｧｶでぇ１     ") , "a b ヴァカでぇ1");
    }
}
