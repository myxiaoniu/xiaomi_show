<?php

namespace app\admin\controller;

use app\admin\model\User as UserModel;
//use app\admin\model\Plm ;
use think\Controller;
use think\Db;
use think\Request;

class User extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {
//        $request = Request::instance();
//        echo "admin".$request->domain();
//        echo "你好".$request->baseFile();
//          echo "url 是".$request->baseUrl();
//          echo "root地址是".$request->root(true);
//            echo "url 后缀是".$request->ext().'';
//        echo "模板名称".$request->module();
//        echo "当前控制器".$request->controller();
//        echo "当前操作名称".$request->action();
//            dump($request->has('id','get'));


    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create(Request $request)
    {
//        dump($request->has('id','get'));
//        dump($request->has('name','put'));
//        dump(input('?get.id'));
//        dump($request->get('name'));
//        dump(input('param.name'));
//        dump($request->get());
//        dump(input('get.'));
//        dump($request->request('id'));
//        dump($request->request());
//        dump(input('get.id/d'));
//        dump(input('post.age/f'));
//        dump($request->post(['name'=>'张4']));
//        dump($request->isPost())
//        if($request->isPost()) echo '这是POST提交';






    }



    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
//        $op = Db::query("select * from plm  where age=?" , [13]);
////        Db::query('select * from think_user where id=?',[8]);
//        dump($op);
//        Db::execute("insert into plm (name , email , age) values (?,?,?)",["李白" , "12345678@qq.com" ,34]);
//        $op = Db::table('plm')->where('age','34')->find();

//        $op = Db::table('plm')->where('status','1')->column('name');
//        dump($op);
//        $op = $request->header('user-agent');
//        dump($op);
//        Db::table('plm')
//            ->data(['name' => "康书记" , 'email' => "kang@qq.com" , 'age' =>23 , 'status' => 1],['name' => '高书记' , 'email' => 'gao@qq.com' , 'age' => 56 , 'status' => 1])
//            ->insert();
        $data = [
            ['name' => "李书记" , 'email' => "li@qq.com" , 'age' =>59 , 'status' => 1],
            ['name' => '高书记' , 'email' => 'gao@qq.com' , 'age' => 56 , 'status' => 1]
        ];
//        Db::table('plm')->insertAll($data);
//        Db::table('plm')
//            ->data($data)
//            ->insert();
//        Db::table('plm')->update(['id' => 5 , 'name' => '美丽的达康书记']);
//        Db::table('plm')->where('id','2')->setInc('age',5);
//        Db::table('plm')->where('id','2')->setInc('age',1 , 2);
//        Db::table('plm')->where('id','2')->setField('name' , 'thinkphp');
//        Db::table('plm')
//            ->where('id','3')
//            ->inc('property' , '5000')
//            ->dec('age','2')
//            ->update();
//        $count = Db::table('plm')->count('id');
//        dump($count);
//        $max = Db::table('plm')->max('age');
//        dump($max);
//        $user = new UserNodel();
//        $user->name = "小兰";
//        $user->email = "lan@qq.com";
//        $user->status = 1;
//        $user->create_time = strtotime(date("Y-m-d"), time());
//        $user->save();
//        $plm = new UserModel;
//        $plm->name = "小芳";
//        $plm->email = "fang@qq.com";
//        $plm->age = 23;
//        $plm->status = 1;
//        $plm->property = 10000;
//
//        $plm->save();


//        $user = new UserModel;
//        $user->name = '流年';
//        $user->email = 'thinkphp@qq.com';
//        if ($user->save()) {
//            return '用户[ ' . $user->name . ':' . $user->id . ' ]新增成功';
//        } else {
//            return $user->getError();
//        }
//        $user = UserModel::get(2);
//        echo $user->status.'<br />';
//        echo $user->getData('status').'<br />';
//        var_dump($user->getData());
//        $user = new UserModel;
//        $user->name = "YASUO";
//        $user->email = "suo@qq.com";
//        $user->status = 1;
//        $user->save();

//        $user = UserModel::get(6);
//        echo $user->status.'<br />';
//        echo $user->getData('status').'<br />';
//        var_dump($user->getData());




    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
