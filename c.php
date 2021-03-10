
<?php
require 'zb_system/function/c_system_base.php';
$zbp->Load();

//定义一个函数
function class_b($obj){
    echo $obj->getName();
}

//调用函数时，传入一个类的参数
class_b(new class{
    public function getName(){
        return "mochu";
    }
});
