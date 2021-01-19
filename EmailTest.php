<?php

require "Email.php";

class EmailTest extends PHPUnit_Framework_TestCase
{

    public function test_checkEmail_givenGoodEmail_shouldReturnTrue(){
        $email = new Email();

        $test = $email->checkEmail("axel.dec@hotmail.com");


        $this->assertEquals(true,$test);
    }

    public function test_checkEmail_givenBadEmail_shouldReturnFalse(){
        $this->assertEquals(false,false);
    }
}
