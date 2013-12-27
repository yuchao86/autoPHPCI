<?php
/*---------------------------------------------------
  ---------		AUTO PHP CI		    -----------------
  ---------EMAIL: YUCHAO86@GMAIL.COM-----------------
  ---------		Date: 2013-12-27	-----------------
  --------------------------------------------------*/
  
include_once "PHPUnit/Autoload.php";
require_once "SomeClass.php";

    class StubTest extends PHPUnit_Framework_TestCase
    {
        public function testStub()
        {
            $stub = $this->getMock('SomeClass');

            $stub->expects($this->any())
                ->method('doSomething')
                ->will($this->returnValue('foo'));

            $this->assertEquals('foo',$stub->doSomething());
        }
    }
