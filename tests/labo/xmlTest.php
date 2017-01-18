<?php
use PHPUnit\Framework\TestCase;

class xmlTest extends TestCase
{
    public function testReadXML()
    {
        $file = file_get_contents('./tests/labo//data/nakabun.enex');
        $this->assertNotEmpty($file); 

        $note = new SimpleXMLElement($file);

    }
}
?>
