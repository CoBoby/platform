<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        echo 'login';
    }
    
    public function userModel() {
        //$user = new SysUserModel();
        //var_dump($user->select());
        $user = M('sys_user');
        var_dump($user->select());
    }
}
?>