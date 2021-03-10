
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




die();


// $content = '据披露，英国1973年的一部《公司法》草案曾引发王室高度重视：该草案中含有一项透明性条款，原本是为防止投资人暗中收购、增持公司股份，致使公司商业风险增加。一旦成为法律，英国公众将有机会获悉特定投资人或持股人的真实身份。《卫报》推测，当年女王很可能担忧该草案能让公众窥探到自己的财务状况，于是委派了私人律师去秘密游说政府相关人员。';
// var_dump(ycl($content));
/*

deleteDir('zb');
function deleteDir($dir){
    if (!$handle = @opendir($dir)) {
        return false;
    }
    while (false !== ($file = readdir($handle))) {
        if ($file !== "." && $file !== "..") {
            $file = $dir . '/' . $file;
            if (is_dir($file)) {
                deleteDir($file);
            } else {
                @unlink($file);
            }
        }

    }
    @rmdir($dir);
}

*/