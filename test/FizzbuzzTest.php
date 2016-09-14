<?php
namespace App;
class FizzbuzzTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @test
   */
  public function 受け取った数値をそのまま返すこと()
  {
    $fizzbuzz = new Fizzbuzz();
    $expected = 1;
    $this->assertSame($expected, $fizzbuzz->calc(1));
  }
}
