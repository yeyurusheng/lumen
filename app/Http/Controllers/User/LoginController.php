<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;




class LoginController
{
    public function login(Request $request){
        $user_name = $request->input('u');
        $pass = $request->input('p');

        //echo '<pre>';print_r($user_name);echo '</pre>';

        if(1){
            $uid = 1000;
            $str = time()+$uid+mt_rand(1111,9999);
            $token = substr(md5($str),10,20);

            //保存token 至 Redis
            $key = 'api:h:u:'.$uid;
            Redis::hSet($key,'token',$token);
            echo $token;
        }else{
            //TODO 登陆成功
        }

    }
}
