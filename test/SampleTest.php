<?php
namespace App;
class SampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 引数を2倍にして返すこと()
    {
        $sample = new Sample(1);

        $expected = 2;
        $this->assertSame($expected, $sample->calc());
    }

    public function dp_引数を2倍にして返すこと_データプロバイダ使用()
    {
        return [
            // $arg, $expected
            [1, 2],
            [2, 4],
            [3, 6],
        ];
    }

    /**
     * @test
     * @dataProvider dp_引数を2倍にして返すこと_データプロバイダ使用
     */
    public function 引数を2倍にして返すこと_データプロバイダ使用($arg, $expected)
    {
        $sample = new Sample($arg);

        $this->assertSame($expected, $sample->calc());
    }

    /**
     * @test
     * @expectedException Exception
     */
    public function 引数が数値でない場合は例外を返すこと()
    {
        $sample = new Sample('1');
    }
}
