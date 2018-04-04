<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        //登录用户页面访问权限
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store'],
        ]);

        //未登录用户只能访问页面
        $this->middleware('guest', [
            'only' => ['create'],
        ]);
    }

    //用户列表
    public function index()
    {
        $users = User::paginate(10);
        return view('Users.index')->with('users', $users);
    }

    //用户注册页面
    public function create()
    {
        return view('users.create');
    }

    //用户个人页面
    public function show(User $user)
    {
        $statuses = $user->statuses()->orderBy('created_at', 'desc')->paginate(20);
        //dump($statuses);die;
        return view('users.show', compact('statuses', 'user'));
    }

    //注册
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //默认登录
        Auth::login($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }

    //编辑页面
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    //更新
    public function update(User $user, Request $request)
    {
        //验证
        $this->validate($request, [
            'name' => 'required|max:50',
            'password' => 'nullable|confirmed|min:6',
        ]);

        $this->authorize('update', $user);

        $data = [];
        $data['name'] = $request->name;
        //判断是否更新密码
        if ($request->password) {
            $data['password'] = bcryb($request->password);
        }

        //更新
        // $user->update([
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
        // ]);

        $user->update($data);

        session()->flash('success', '个人资料更新成功');
        //更新成功的跳转
        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user)
    {
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success', '用户删除成功');
        return back();
    }
}
