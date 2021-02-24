<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\Console\Input\Input;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{

    public function _construct()  //构造方法
    {
        //这个类方法执行  必须要经过中间件auth后执行
        $this->middleware('auth');
    }
    //
    public function index()
    {
        
        echo "home";
    }
    public function set(Request $request)
    {
        //斜杠是根空间  
        // \Cookie::queue('name-2','zhuangfeng',10);
        // setcookie('name','guanhui',time()+3600,'/');
        // return response('<p>我是响应体</p>')->withCookie('uid','cookie',10);
    
        //读取
        // $name=\Cookie::get('name');
        $name=$request->cookie('uid');     //读取
        dd($name);
    
    }
    //主要用在页面提醒上
    //使用闪存传入session数据     flash(键  值)  只能有一次
    public function flash(Request $request)
    {
        // \Session::flash('week','Moday');
        // $request->session()->flash('week','Monday');
        //redirect()  函数返回结果是一个对象
        return redirect('/getFlash')->with('info','添加成功');
        
    }
    //session  中读取闪存数据
    public function getFlash(Request $request)
    {
        // echo $request->session()->get('week');
        return view('admin');
    }

    //表单登录
    public function user()
    {
        return view('user');
    }
    
    public function insert(Request $request)
    {
        // 表单验证
        if(strlen($_POST['username'])<6){
            $request->session()->flash('error','用户名格式不正确');
            // 下面这样设置会把post中的用户名加入闪存中
            // $request->session()->flash('username',$_POST['username']);
            
            //封装好的闪存方法  自动把输入值加入闪存
            return back()->withInput();
        }
    }

    public function response()
    {
        //返回一个模板
        // return view('view');
        //返回一个下载文件
        return response()->download('../public/request.log');
        //页面跳转
        // return redirect('/home');
    }

    public function views()
    {
        //使用变量      title  content   {{}}  使用函数{{time()}}
        return view('user.add',[
            'title'=>'第一次接触',
            'content'=>'河南发大水',
            'username'=>'游客',
            'pages'=>'<a href="">1</a><a href="">2</a>'
            ]);
    }

    //创建页面1
    public function page1()
    {
        return view('page1');
    }
    //创建页面2
    public function page2()
    {
        return view('page2');
    }

    public function control()
    {
        return view('control',[
            'isVip'=>false,
            'classmates'=>[
                '小贾',
                '小明',
                '小林',
            ]
        ]);
    }

}
