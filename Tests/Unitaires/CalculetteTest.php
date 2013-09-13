<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalculetteTest
 *
 * @author Anthony
 */ 
class CalculetteTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculette();
        $result = $calc->add(22, 20);

        // vérifie que votre classe a correctement calculé!
        $this->assertEquals(42, $result);
    }
}

?>
