<?php
require "../app/libcss.php";
use PHPUnit\Framework\TestCase;

class LibCssTest extends TestCase {
    public function testLoadLib(){
        $lib = new LibCss();

        $this->assertEquals($lib->loadLib('nieistnieje-skrypt','js','0'),"<script src='nieistnieje-skrypt.js'></script>");
        $this->assertEquals($lib->loadLib('skrypt', 'js', '0'),"<script src='skrypt.js'></script>");
        $this->assertEquals($lib->loadLib('skrypt', 'js', '123'),"<script src='skrypt.js?v=123'></script>");

        $this->assertEquals($lib->loadLib('nieistnieje-arkusz', 'css', '0'),"<link rel='stylesheet' href='nieistnieje-arkusz.css'/>");
        $this->assertEquals($lib->loadLib('arkusz', 'css', '0'),"<link rel='stylesheet' href='arkusz.css'/>");
        $this->assertEquals($lib->loadLib('arkusz', 'css', '123'),"<link rel='stylesheet' href='arkusz.css?v=123'/>");
    }
}
?>