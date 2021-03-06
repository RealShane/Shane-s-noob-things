<?php
namespace app\origin\controller;
use app\origin\model\Visitor_s_record;
use think\Controller;
use app\origin\model\Forum_user;
class Index extends Controller{
	public function index(){
		$ip_get = $_SERVER["REMOTE_ADDR"];
		$timezone_out=date_default_timezone_get();
      	date_default_timezone_set('Asia/Shanghai');
      	$time=date("Y-m-d H:i:s");
      	date_default_timezone_set($timezone_out);
		$site="综合系统主页";
		Visitor_s_record::create([
    			'ip_address'=>$ip_get,
    			'time'=>$time,
				'site'=>$site
			], ['ip_address','time','site']
		);
		return $this->fetch();//渲染视图->主页
	}
	public function register(){
		$ip_get = $_SERVER["REMOTE_ADDR"];
		$timezone_out=date_default_timezone_get();
      	date_default_timezone_set('Asia/Shanghai');
      	$time=date("Y-m-d H:i:s");
      	date_default_timezone_set($timezone_out);
		$site="注册";
		Visitor_s_record::create([
    			'ip_address'=>$ip_get,
    			'time'=>$time,
				'site'=>$site
			], ['ip_address','time','site']
		);
		return $this->fetch();//渲染视图->注册
	}
}
?>