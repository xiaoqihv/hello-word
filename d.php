<?php
class A
{
    public function echo_a()
    {
        echo "a";
    }
    public function echo_b()
    {
        echo "b";
    }
    public function echo_c()
    {
        echo "c";
    }
}

$arr = ['echo_a', 'echo_b', 'echo_c'];
$a = new A();
foreach ($arr as $v) {
    $a->$v();
}