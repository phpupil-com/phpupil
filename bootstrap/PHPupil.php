<?php
/**
 * 启动文件,创建新项目
 * @copyright PHPupil Framework http://www.phpupil.com/
 * @author 吴跃忠 <357397264@qq.com>
 */
if( $argc < 2 ){
    return false;
}
// 创建新项目
if( strtolower($argv[1]) == 'create' ){
    $writePath = __DIR__ . '/../';
    if( !is_writable( $writePath ) ){
        die("当前项目库没有写入权限,请设置权限后重试!");
    }
    $newProjectName = $argv[2];
    $newProjectPath = $writePath.$newProjectName;
    if( is_dir($newProjectPath) ){
        die("当前项目目录已存在,如需继续安装,请删除后进行!");
    }
    try{
        mkdir($newProjectPath);
        mkdir($newProjectPath.'/controllers');
        mkdir($newProjectPath.'/models');
        $controllerContent = '<?php
namespace '.$argv[2].'\controllers;

class Index
{

    public function index()
    {
        echo "\"'.$argv[2].'\" Module Create Success!";
    }

}
        ';
        file_put_contents($newProjectPath.'/controllers/Index.php',$controllerContent);
    }catch (\Exception $e){
        echo $e->getMessage();
    }

}elseif ( strtolower($argv) == '-s' ){

}