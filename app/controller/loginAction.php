<?php

namespace app\controller;

use TXApp;

/**
 * Created by PhpStorm.
 * User: billge
 * Date: 16-6-22
 * Time: 上午11:38
 * @property \app\dao\userDAO $userDAO
 */
class loginAction extends baseAction
{
    /**
     * 登录
     */
    public function action_index()
    {
        $ref = TXApp::$base->request->getReferrer();
        if (TXApp::$model->cus->exist()) {
            TXApp::$base->request->redirect($ref);

        } else {
            return $this->display('mytest/login');
        }

    }

    public function action_yz()
    {

        $tel = $this->param('tel');
        $name = $this->param('name');
        if ($user = $this->cusDAO->filter(['Name' => $name, 'Tel' => $tel])->find()) {
            TXApp::$model->cus($user['ID'])->login();

            $res['error'] = 0;
            $res['msg'] = "验证成功。" .;
            return json_encode($res);

        } else {

            $res['error'] = 1;
            $res['msg'] = "没有查询到该用户。";
            return json_encode($res);
        }

    }
}


