<?php
/**
 * Http服务器启动文件
 * @copyright PHPupil Framework http://www.phpupil.com/
 * @author 吴跃忠 <357397264@qq.com>
 */
define('PHPUPIL_PATH',__DIR__ . '/../');

require_once __DIR__ . "/../vendor/autoload.php";

use \PHPupil\Framework\PHPupil;

class Http extends PHPupil
{

    /**
     * 服务端配置
     * @var array
     */
    private $setting = [
        'worker_num' => 4,
        'task_worker_num' => 4,
    ];

    /**
     * Http constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // 设置服务类型
        $this->set_server_type( parent::SERVER_TYPE_HTTP );
    }


}

$server = new Http();

$server->run();