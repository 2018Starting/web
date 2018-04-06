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
        if (TXApp::$model->cus->exist()) {
            //return $this->display('mytest/regok');
            if ($lastUrl = TXApp::$base->session->lastUrl) {
                unset(TXApp::$base->session->lastUrl);
            }
            return $this->display('mytest/hz');

        } else {
            //TXApp::$base->request->redirect('/');

            TXApp::$base->session->lastUrl = '/hz';
            TXApp::$base->request->redirect('/login');
        }
    }

    public function action_renew()
    {
        $DDDate = $this->param('C');
        $DDTime = $this->param('D');
        $DDJT = $this->param('E');
        $DDJZ = $this->param('F');
        $LKDate = $this->param('G');
        $LKTime = $this->param('H');
        $LKJT = $this->param('I');
        $LKSZ = $this->param('J');
        $ZSYQ1 = $this->param('K');
        $ZSYQ2 = $this->param('L');
        $CGLX = $this->param('M');
        $update=$this->cusDAO->filter(['ID'=>TxApp::$model->cus->ID])->update(array('DDDate'=>$DDDate,'DDTime'=>$DDTime,'DDJT'=>$DDJT,'DDJZ'=>$DDJZ,'LKDate'=>$LKDate,'LKTime'=>$LKTime,'LKJT'=>$LKJT,'LKSZ'=>$LKSZ,'ZSYQ1'=>$ZSYQ1,'ZSYQ2'=>$ZSYQ2,'CGLX'=>$CGLX));
        if($update)
        {
           $res['error'] = 0;
           $res['msg'] = 'Success';
           return json_encode($res); 
        }
        else
        {
            $res['error'] = 1;
            $res['msg'] = 'Fail';
            return json_encode($res);
        }
    }

}