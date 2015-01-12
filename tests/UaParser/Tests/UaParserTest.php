<?php namespace UAParser\Tests;

use UAParser\Parser;

class UaParserTest extends TestCase
{
    public function testItCorrectlyParsesAMatchingString()
    {
        $regexData = array(
            'user_agent' =>
                array(
                    '@somestring@' => array(
                        'family' => 'foo',
                        'major' => 'bar',
                        'minor' => 1,
                        'patch' => 2
                    ),
                ),
            'device' =>
                array(
                    '@somestring@' => array(
                        'device' => 'fizz',
                        'brand' => 'buzz',
                        'model' => 3,
                    ),
                ),
            'os' =>
                array(
                    '@(some)str(ing)@' => array(
                        'minor' => 5,
                        'patch' => 6
                    ),
                ),
        );

        $expected = array(
            'user_agent' =>
                array(
                    'family' => 'foo',
                    'major' => 'bar',
                    'minor' => '1',
                    'patch' => '2'
                ),
            'device' =>
                array(
                    'device' => 'fizz',
                    'brand' => 'buzz',
                    'model' => '3',
                ),
            'os' =>
                array(
                    'family' => 'some',
                    'major' => 'ing',
                    'minor' => '5',
                    'patch' => '6'
                ),
        );

        $string = "somestring";

        $parser = new Parser($regexData);

        $result = $parser->parse($string);

        $this->assertEquals($expected, $result);
    }
}