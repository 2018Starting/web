<?php

namespace app\controller;

use TXApp;


class hzAction extends baseAction
{
    protected $csrfValidate = false;

    /**
     * 注册
     */
    public function action_index()
    {
        if (!TXApp::$model->cus->exist()) {
            //return $this->display('mytest/regok');
            TXApp::$base->request->redirect('/reg');
        }
         else {
            //TXApp::$base->request->redirect('/');
            return $this->display('mytest/hz');
        }
    }

}