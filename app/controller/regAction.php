<?php

namespace app\controller;

use TXApp;

ini_set("display_errors", "on");

require_once(dirname(__FILE__) . '/api_sdk/vendor/autoload.php');

use Aliyun\Core\Config;
use Aliyun\Core\Profile\DefaultProfile;
use Aliyun\Core\DefaultAcsClient;
use Aliyun\Api\Sms\Request\V20170525\SendSmsRequest;
use Aliyun\Api\Sms\Request\V20170525\QuerySendDetailsRequest;

// 加载区域结点配置
Config::load();

/**
 * Class SmsDemo
 *
 * @property \Aliyun\Core\DefaultAcsClient acsClient
 */
class SmsDemo
{

    /**
     * 构造器
     *
     * @param string $accessKeyId 必填，AccessKeyId
     * @param string $accessKeySecret 必填，AccessKeySecret
     */
    public function __construct($accessKeyId, $accessKeySecret)
    {

        // 短信API产品名
        $product = "Dysmsapi";

        // 短信API产品域名
        $domain = "dysmsapi.aliyuncs.com";

        // 暂时不支持多Region
        $region = "cn-hangzhou";

        // 服务结点
        $endPointName = "cn-hangzhou";

        // 初始化用户Profile实例
        $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

        // 增加服务结点
        DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);

        // 初始化AcsClient用于发起请求
        $this->acsClient = new DefaultAcsClient($profile);
    }

    /**
     * 发送短信范例
     *
     * @param string $signName <p>
     * 必填, 短信签名，应严格"签名名称"填写，参考：<a href="https://dysms.console.aliyun.com/dysms.htm#/sign">短信签名页</a>
     * </p>
     * @param string $templateCode <p>
     * 必填, 短信模板Code，应严格按"模板CODE"填写, 参考：<a href="https://dysms.console.aliyun.com/dysms.htm#/template">短信模板页</a>
     * (e.g. SMS_0001)
     * </p>
     * @param string $phoneNumbers 必填, 短信接收号码 (e.g. 12345678901)
     * @param array|null $templateParam <p>
     * 选填, 假如模板中存在变量需要替换则为必填项 (e.g. Array("code"=>"12345", "product"=>"阿里通信"))
     * </p>
     * @param string|null $outId [optional] 选填, 发送短信流水号 (e.g. 1234)
     * @return stdClass
     */
    public function sendSms($signName, $templateCode, $phoneNumbers, $templateParam = null, $outId = null)
    {

        // 初始化SendSmsRequest实例用于设置发送短信的参数
        $request = new SendSmsRequest();

        // 必填，设置雉短信接收号码
        $request->setPhoneNumbers($phoneNumbers);

        // 必填，设置签名名称
        $request->setSignName($signName);

        // 必填，设置模板CODE
        $request->setTemplateCode($templateCode);

        // 可选，设置模板参数
        if ($templateParam) {
            $request->setTemplateParam(json_encode($templateParam));
        }

        // 可选，设置流水号
        if ($outId) {
            $request->setOutId($outId);
        }

        // 发起访问请求
        $acsResponse = $this->acsClient->getAcsResponse($request);

        // 打印请求结果
        // var_dump($acsResponse);

        return $acsResponse;

    }

    /**
     * 查询短信发送情况范例
     *
     * @param string $phoneNumbers 必填, 短信接收号码 (e.g. 12345678901)
     * @param string $sendDate 必填，短信发送日期，格式Ymd，支持近30天记录查询 (e.g. 20170710)
     * @param int $pageSize 必填，分页大小
     * @param int $currentPage 必填，当前页码
     * @param string $bizId 选填，短信发送流水号 (e.g. abc123)
     * @return stdClass
     */
    public function queryDetails($phoneNumbers, $sendDate, $pageSize = 10, $currentPage = 1, $bizId = null)
    {

        // 初始化QuerySendDetailsRequest实例用于设置短信查询的参数
        $request = new QuerySendDetailsRequest();

        // 必填，短信接收号码
        $request->setPhoneNumber($phoneNumbers);

        // 选填，短信发送流水号
        $request->setBizId($bizId);

        // 必填，短信发送日期，支持近30天记录查询，格式Ymd
        $request->setSendDate($sendDate);

        // 必填，分页大小
        $request->setPageSize($pageSize);

        // 必填，当前页码
        $request->setCurrentPage($currentPage);

        // 发起访问请求
        $acsResponse = $this->acsClient->getAcsResponse($request);

        // 打印请求结果
        // var_dump($acsResponse);

        return $acsResponse;
    }

}

// 调用示例：

header('Content-Type: text/plain; charset=utf-8');
//检查是否重复
function verifyData($data, $query)
{
    //1.连接数据库
    @$db = mysql_connect("qdm114948652.my3w.com", "qdm114948652", "4bX6fR9yM6yR");
    if (!$db)
        die("连接数据库失败");
    //2.验证数据是否存在
    mysql_select_db('qdm114948652_db', $db);
    $sql = "select $query from user where $query = '{$data}'";
    $res = mysql_query($sql);
    //此处存在错误
    $row = mysql_num_rows($res);
    //3.关闭数据库
    mysql_close($db);
    return $row > 0 ? True : False;
    //return  is_null($res)? False:True;
}


/**
 * Created by PhpStorm.
 * User: billge
 * Date: 16-6-22
 * Time: 上午11:38
 * @property \app\dao\userDAO $userDAO
 */
class regAction extends baseAction
{
    protected $csrfValidate = false;

    /**
     * 注册
     */
    public function action_index()
    {
        if (TXApp::$model->person->exist()) {
            TXApp::$base->request->redirect('/');
        }
        $username = $this->param('username');
        if (!$username) {
            return $this->display('mytest/reg');
        }
        if ($user = $this->userDAO->filter(['name' => $username])->find()) {
            TXApp::$model->person($user['id'])->login();
        } else {
            $id = $this->userDAO->add(['name' => $username, 'registerTime' => time()]);
            TXApp::$model->person($id)->login();
        }
        if ($lastUrl = TXApp::$base->session->lastUrl) {
            unset(TXApp::$base->session->lastUrl);
            TXApp::$base->request->redirect($lastUrl);
        } else {
            TXApp::$base->request->redirect('/');
        }
    }

    //测试方法  http://localhost/reg/print   reg  模块  print 方法

    public function action_print()
    {
        return $this->display('demo/demo');

    }

    public function action_getcode()
    {
        $demo = new SmsDemo(
            "LTAIh5InUFSGC6Df",
            "IAkqLZTgkbHlx5P3BA6Hocv1gh9OTH"
        );

        $tel = $_POST['mobile'];

//查询是否注册
        if (verifyData('Tel', $tel)) {
            $result['error'] = 1;
            $result['msg'] = "已经注册。";
            echo json_encode($result);
        } else {
//随机生成一个4位数的数字验证码  
            $num = "";
            for ($i = 0; $i < 6; $i++) {
                $num .= rand(0, 9);
            }
            Session_start();
            $_SESSION['checkcode'] = $num;
//echo "SmsDemo::sendSms\n";
            /*
            $demo->sendSms(
                "2017医药创新与发展", // 短信签名
                "SMS_88170028", // 短信模板编号
                $tel, // 短信接收者
                Array(  // 短信模板中字段的值
                    "number"=>$num,
                )//,"123"
            );
            */
            $result['error'] = 0;

            $result['msg'] = $num;
//$result['msg']='发送成功，请留意查收';
            echo json_encode($result);
        }
    }

}