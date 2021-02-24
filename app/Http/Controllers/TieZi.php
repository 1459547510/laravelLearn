<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TieZi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  主页  
        return "帖子列表";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //表单页面
        // return "这里是添加的页面"; 
        return view('tiezi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单提交页面
        return '这里是数据插入操作';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return '帖子详情,id为'.$id;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // echo '帖子修改页面';
        return view('tiezi/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo '更新操作';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "数据的删除操作";
    }

    //请求
    public function request(Request $request)
    {
        //获取url get参数     input也可以获取
        $name=$request->get('name');

        //函数dd()   
        dd($name);
    }
    public function form(){
        // 表单
        return view('tiezi/form');
    }
    public function upload(Request $request){
        // echo 2222;
        // 储存上传文件     store('文件夹名称')
        $path=$request->img->store('images');
        var_dump($path);
    }
}
