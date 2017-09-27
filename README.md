# tp5-demos
集成支付宝、微信支付，百度云推送和Excel表格导入导出

# 使用说明
##1、微信支付

- 在默认配置情况下，将文件夹**拷贝到根目录**即可, 其中<code>extend</code>目录为扩展目录
- 需要在配置文件<code>extend/wxpay/lib/WxPayConfig.php</code>中填写必要的参数
- 如有退款操作, 请将证书放到<code>extend/wxpay/cert/</code>目录中
- <code>application/demos/WxpayController.php</code>为示例代码
##2、

- 在默认配置情况下，将文件夹拷贝到根目录即可, 其中<code>extend</code>目录为支付扩展目录, <code>application\extra\alipay.php</code>为配置文件
- 需要在配置文件<code>application\extra\alipay.php</code>中填写必要的参数

## 注意
- 错误采用抛出异常的方式, 可根据自己的业务在统一接口<code>extend/wxpay/lib/WxPayException.php</code>中修改
- 上线后, 请务必将配置中的<code>WXPAY_DEBUG</code>改为<code>false</code>
- <code>公众号支付、wap支付</code>, 由于我们公司是在小程序上开通的微信支付, 无法完美的测试, 只能采用模拟数据形式, 如有问题, 请提交issue

#用法
##支付宝demo写的不全

#### 电脑网站支付 Pagepay.php
调用 <code>\alipay\Pagepay::pay($params)</code> 即可

#### 手机网站支付 Wappay.php
调用 <code>\alipay\Wappay::pay($params)</code> 即可

#### 交易查询接口 Query.php
调用 <code>\alipay\Query::exec($query_no)</code> 即可

#### 交易退款接口 Refund.php
调用 <code>\alipay\Refund::exec($params)</code> 即可

#### 退款统一订单查询 RefundQuery.php
调用 <code>\alipay\RefundQuery::exec($params)</code> 即可

#### 交易关闭接口 Close.php
调用 <code>\alipay\Close::exec($query_no)</code> 即可

#### 查询账单下载地址接口 Datadownload.php
调用 <code>\alipay\Datadownload::exec($bill_type, $bill_date)</code> 即可
