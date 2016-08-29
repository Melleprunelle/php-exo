<?php

require "hello-world.php";

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function testNoName()
    {
        $this->assertEquals('Hello, World!', helloWorld());
    }

    public function testSampleName()
    {
       //$this->markTestSkipped();
        $this->assertEquals('Hello, Alice!', helloWorld('Alice'));
    }

    public function testAnotherSampleName()
    {
      //  $this->markTestSkipped();
        $this->assertEquals('Hello, Bob!', helloWorld('Bob'));
    }
}
