<?php
namespace CC;
/**
 * Description of FactoryTest
 *
 * @author scottgibson-craig
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider items
     */
    public function testProductsCreatedByAssemblyLine($name)
    {
        $item = Factory::assemblyLine($name);
        $this->assertInstanceOf('\CC\Product\Standard', $item);
    }

    /**
     * @expectedException     Exception
     * @dataProvider exceptions
     */
    public function testExceptionsThrownByAssemblyLine()
    {
        Factory::assemblyLine($name);
    }

    /**
     * List of items should be creatable
     *
     * @return array
     */
    public function items()
    {
        return array(
            array('hotseller'),
            array('latest'),
            array('topseller')
        );
    }

    /**
     * List of items that should throw exceptions
     *
     * @return array
     */
    public function exceptions()
    {
        return array(
            array('noneName'),
            array('standard')
        );
    }
}