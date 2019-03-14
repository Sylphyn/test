<?php

/**
 * Created by PhpStorm.
 * User: phongnh
 * Date: 3/11/19
 * Time: 9:57 PM
 */

class RomanNumTest extends \PHPUnit\Framework\TestCase
{
    protected $generator;
    protected function setUp(){
        $this->generator = new \App\Support\RomanNum();
    }
    /** @test  */
    public function test_check_invalid_inputs(){
        $this->assertEquals('',$this->generator->generate(0));
        $this->assertEquals('',$this->generator->generate(4000));
        $this->assertEquals('',$this->generator->generate('thousand'));
        $this->assertEquals('',$this->generator->generate(3.5));
    }
    /** @test  */
    public function testValues(){
        $testValues = array(
            1	=>	'I',
            4	=>	'IV',
            9	=>	'IX',
            30	=>	'XXX',
            40	=>	'XL',
            90	=>	'XC',
            400	=>	'CD',
            2013	=>	'MMXIII',
            3999	=>	'MMMCMXCIX'
        );
        foreach ($testValues as $input => $output) {
            $this->assertEquals($output, $this->generator->generate($input));
        }
    }

}
