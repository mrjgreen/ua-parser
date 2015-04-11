<?php namespace UAParser\Tests;

use UAParser\Parser;

class UaParserTest extends TestCase
{
    public function testItCorrectlyParsesAMatchingString()
    {
        $regexData = array(
            'user_agent' =>
                array(
                    '@som(est)r(in)g@' => array(
                        'family' => 'foo',
                        'major' => 'bar $2',
                        'minor' => 1,
                        'patch' => 2,
                        'custom' => 'fizz $1'
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
                    'major' => 'bar in',
                    'minor' => '1',
                    'patch' => '2',
                    'custom' => 'fizz est'
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