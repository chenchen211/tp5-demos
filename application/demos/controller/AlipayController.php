<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26
 * Time: 14:54
 */

namespace app\demos\controller;
use think\Controller;

/**
 * Class AlipayController
 * @package app\U2FsdGVkX18bUN88mHRq7ZgFJS\controller
 * 当前使用的是沙箱模型
 */
class AlipayController extends Controller
{
    public function index(){
        $params = [
            'subject'=>'支付宝支付测试',
            'total_amount'=>'0.01',
            'out_trade_no'=>mt_rand().time(),
        ];
        $result=\alipay\Pagepay::pay($params);
        return $result;
    }

    public function query(){
        $result = \alipay\Query::exec("201709268598785",'out_trade_no');
        return json($result);
    }

}