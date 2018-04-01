<?php

namespace app\controller;

use TXApp;


class regokAction extends baseAction
{
    protected $csrfValidate = false;

    /**
     * 注册
     */
    public function action_index()
    {
        if (TXApp::$model->cus->exist()) {
            echo $user['ID'];
            return $this->display('mytest/regok');
            //TXApp::$base->request->redirect('/');
        }
         else {
            TXApp::$base->request->redirect('/');
        }
    }

    //添加用户name=bo&A=&company=&title=&mobile=&yzm=&email=
    public function action_adduser()
    {
         $username = $this->param('name');
         $sex =$this->param('A');
         $company = $this->param('company');
         $title =$this->param('title');
         $mobile = $this->param('mobile');
         $email = $this->param('email');
         $cjxm = implode(',',$this->param('B')); 
         $id = $this->cusDAO->add(['Name' => $username,'Sex'=> $sex, 'Company'=>$company,'Position'=>$title,'Tel'=>$mobile,'Email'=>$email,'CJXM'=>$cjxm,'RegDate'=>date("Y/m/d"),'RegTime'=>date("h:i:s")]);
         TXApp::$model->cus($id)->login();//TXApp::$base->session->userId = $this->_pk;
         //TXApp::$base->request->redirect('/reg ?id='.$id);
         return $this->display('mytest/regok',$id);
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

        //$tel = $_POST['mobile'];
        $tel = $this->param('mobile');

//查询是否注册 verifyData('Tel', $tel)
       
        if ($this->cusDAO->filter(['Tel' => $tel])->find()) {
            $result['error'] = 1;
            $result['msg'] ="已经注册。";
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