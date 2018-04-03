<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create'],
        ]);
    }

    //登录页面
    public function create()
    {
        return view('sessions.create');
    }

    //登录
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        //attempt()方法判断登陆
        if (Auth::attempt($credentials, $request->has('remember'))) {
            //登陆成功后
            session()->flash('success', '欢迎回来');
            return redirect()->intended(route('users.show', [Auth::user()]));
        } else {
            session()->flash('danger', '您的邮箱和密码不匹配');
            return redirect()->back();
        }
    }

    //退出
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出');
        return redirect('login');
    }
}
