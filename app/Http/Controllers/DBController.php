<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    /* 
    查询  数据库users
    */

    public function select()
    {
        //查询数据
        $mvs=DB::select('select * from users limit 2');
        dd($mvs);
    }

    /* 
    事务    数据库choose
     */
    public function trans()
    {
        // 开启事务
        DB::transaction(function(){   //此过程是自动的不用写下面的判断
            $mvs1=DB::update('update users set telphone=telphone-100 where id=1');

            $mvs2=DB::update('update users set telphone=telphone+100 where id=6');
            // //如果两个都成功
            if($mvs1 && $mvs2){
                DB::commit();  //存储数据
            }else{//否则    回滚
                DB::rollBack();
            }
            //试一试
            // try{
            //     $mvs1=DB::update('update users set telphone=telphone-100 where id=1');
            // }catch(\Exception $e){    //\Exception  异常基类
            //     echo $e->getMessage();  //对异常进行处理
            // }
        });
        return view('page1');
    }

    /* 
    join  使用    数据库choose
    */
    public function join()
    {
        $res=DB::table('student')
        ->join('classes','student.class_no','=','classes.class_no')
        //获取几条
        ->skip(0)   //跳过零条
        ->take(4)
        ->get();
        dd($res);
    }
}

