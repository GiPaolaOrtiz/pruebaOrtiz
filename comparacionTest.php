<?php
require 'Comparacion.php';
 
class ComparacionTests extends PHPUnit_Framework_TestCase
{
    private $comparacion;
 
    protected function setUp()
    {
        $this->comparacion = new Comparacion();
    }
 
    protected function tearDown()
    {
        $this->comparacion= NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
}
}
