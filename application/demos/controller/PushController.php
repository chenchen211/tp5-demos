<?php
namespace app\demos\controller;

use app\U2FsdGVkX18bUN88mHRq7ZgFJS\controller\BaseController;
use app\U2FsdGVkX18bUN88mHRq7ZgFJS\model\Robot;
use think\Db;
use think\Loader;
Loader::import('push.PushSDK',EXTEND_PATH);
class PushController extends BaseController{
	
	public function index(){
		$robot = new Robot();
		return $_GET['v']== 1 ? $robot->execute_v1(urldecode($_GET['content'])) : $robot->excute(urldecode($_GET['content']));
	}

	public function push(){
		
		$push = new \PushSDK();
		
		$channelId = '3785562685113372034';
		
		// message content.
		$message = array (
		    // 消息的标题.
		    'title' => 'Hi!',
		    // 消息内容 
		    'description' => "hello, this message from baidu push service." 
		);
		
		// 设置消息类型为 通知类型.
		$opts = array (
		    'msg_type' => 1 
		);
		
		// 向目标设备发送一条消息
//		$rs = $push -> pushMsgToSingleDevice($channelId, $message, $opts);
		$rs = $push->pushMsgToAll($message,$opts);
		// 判断返回值,当发送失败时, $rs的结果为false, 可以通过getError来获得错误信息.
		if($rs === false){
		   print_r($push->getLastErrorCode()); 
		   print_r($push->getLastErrorMsg()); 
		}else{
		    // 将打印出消息的id,发送时间等相关信息.
		    print_r($rs);
		}
	}
}
?>