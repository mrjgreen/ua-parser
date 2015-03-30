<?php namespace UAParser\Tests;

use UAParser\Parser;

class UaParserIntegrationTest extends TestCase
{
    public function testItCorrectlyReadsDataFromDefaultLocation()
    {
        $string = "Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3";

        $expected = array(
            'user_agent' => array(
                "family"    => "Mobile Safari",
                "major"     => "5",
                "minor"     => "1",
                "patch"     => null,
            ),
            "os" => array(
                "family"    => "iOS",
                "major"     => "5",
                "minor"     => "0",
                "patch"     => null,
            ),
            "device" => array(
                "device"    => "iPhone",
                "brand"     => "Apple",
                "model"     => "iPhone",
            )
        );

        $parser = new Parser();

        $result = $parser->parse($string);

        $this->assertEquals($expected, $result);
    }
}