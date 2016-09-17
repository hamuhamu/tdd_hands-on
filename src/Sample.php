<?php
namespace App;
class Sample
{
    private $arg;
    public function __construct($arg)
    {
        if (!is_int($arg)) {
            throw new \Exception('引数に数値を渡してください');
        }

        $this->arg = $arg;
    }

    public function calc()
    {
        return $this->arg * 2;
    }
}
