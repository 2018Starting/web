<?php

namespace app\dao;

/**
 * 用户表
 */
class cusDAO extends baseDAO
{
    protected $table = 'Cus';
    protected $_pk = 'ID';
    protected $_pkCache = true;
}