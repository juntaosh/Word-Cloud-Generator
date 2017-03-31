<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once '/home/student/Desktop/310Imple_Final/csci310_Spring_P1/Project/tests/wordcountForTest.php';

final class wordcountTest extends TestCase
{
    protected function setUp(){
        parent::setUp();
        $lyrics = ["Republican leaders in the Capitol meanwhile","have largely distanced themselves from the accusations as they attempt to focus on their own internal rifts that have hobbled the effort to repeal and replace Obamacare But Trumps accusations only added to a swirl of questions about Russia meddling in the 2016 elections already being investigated by House and Senate lawmakers"];
        $_POST['lyrics'] = $lyrics;
    }

    public function testCountCorrectly(){
        $input1 = "abc abc abc bcd bcd abc cde cde bcd def";
        $result1 = 4;
        $this->assertEquals(getnumber($input1, "abc"), $result1);
    }
    public function testPassInsufficientParameter(){
	$input1 = "abc abc abc bcd bcd abc cde cde bcd def";
        $this->assertEquals(getnumber($input1), 0);
    }
}

