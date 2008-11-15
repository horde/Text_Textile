<?php
/**
 * @category   Horde
 * @package    Horde_Text_Textile
 * @subpackage UnitTests
 */

/** Horde_Text_Textile */
require_once dirname(__FILE__) . '/../../../../lib/Horde/Text/Textile.php';

/**
 * @category   Horde
 * @package    Horde_Text_Textile
 * @subpackage UnitTests
 */
class Horde_Text_Textile_TestCase extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->textilizer = new Horde_Text_Textile;
    }


    public function assertTransforms($text, $html, $msg = '')
    {
        $this->assertEquals($html, $this->textilizer->transform($text), $msg);
    }

}
