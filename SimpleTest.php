<?php
//Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php_check_syntax
//Butuh Framework phpunit
use PHPUnit\Framework\TestCase;


require_once "WordCount.php";


class SimpleTest extends TestCase{
    public function testCountWords()
    {
        $Wc = new WordCount();

        $TestSentence = "My name is Anggi"; // 4 kata
        $WordCount = $Wc->countWords($TestSentence);


        $this->assertEquals(4, $WordCount);
    }
}
?>