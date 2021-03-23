<?php
/**
 * @category   Horde
 * @package    Text_Textile
 * @subpackage UnitTests
 */
namespace Horde\Text\Textile;
use PHPUnit\Framework\TestCase;
use \Horde_Text_Textile;

/**
 * @category   Horde
 * @package    Text_Textile
 * @subpackage UnitTests
 */
class BaseTestCase extends TestCase {

    public function setUp(): void
    {
        $this->textilizer = new Horde_Text_Textile;
    }


    public function assertTransforms($text, $html, $msg = '')
    {
        $this->assertEquals($html, $this->textilizer->transform($text), $msg);
    }

}
