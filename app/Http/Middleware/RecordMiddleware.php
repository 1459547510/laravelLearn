<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RecordMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    	
		//记录每一个请求的   请求路径
		//获取路径
		$path =$request->ip().$request->get('name');
        // 将字符串写入文件
		file_put_contents('./request.log', $path."\r\n",FILE_APPEND);
		
        return $next($request);
    }
}
