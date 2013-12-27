<?php
/*---------------------------------------------------
  ---------		AUTO PHP CI		    -----------------
  ---------EMAIL: YUCHAO86@GMAIL.COM-----------------
  ---------		Date: 2013-12-27	-----------------
  --------------------------------------------------*/
include_once "PHPUnit/Autoload.php";

class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     * @dataProvider provider
     */
    public function testAdd($a,$b,$c){
        $this->assertEquals($c,$a+$b);

    }

    public function provider(){

        return array(
            array(0,0,0),
            array(0,1,1),
            array(1,0,1),
            array(1,1,3));

    }

}

$DataTest = new DataTest();

$vode =  $DataTest-> testAdd();
echo "===";
var_dump($vode);






?>
