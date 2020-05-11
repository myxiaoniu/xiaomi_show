<?php

namespace app\admin\model;

use think\Model;

class User extends Model
{
    public function getStatusAttr($value)
    {
        $status = [ 0 => "倔强青铜" , 1 => "不屈白银" , 2 => "荣耀黄金" , 3 => "璀璨钻石"];
        return $status[$value];
    }

    public function  setNameAttr($value)
    {
        return strtolower($value);
    }

}
