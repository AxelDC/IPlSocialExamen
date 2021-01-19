<?php

require "Email.php";

class EmailTest extends PHPUnit_Framework_TestCase
{

    private $email;
    public function setUp()
    {
        parent::setUp();
        $this->email = new Email();
    }

    public function test_checkEmail_givenGoodEmail_shouldReturnTrue(){

        //Act
        $test = $this->email->checkEmail("axel.dec@hotmail.com");

        //Assert
        $this->assertEquals(true,$test);
    }

    public function test_checkEmail_givenBadEmail_shouldReturnFalse(){

        //Act
        $test = $this->email->checkEmail("axel.decl.hotmail.com");


        $this->assertEquals(false,$test);
    }
}
