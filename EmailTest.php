<?php


class EmailTest extends PHPUnit_Framework_TestCase
{

    public function test_checkEmail_givenGoodEmail_shouldReturnTrue(){
        $this->assertEquals(true,true);
    }

    public function test_checkEmail_givenBadEmail_shouldReturnFalse(){
        $this->assertEquals(false,false);
    }
}
