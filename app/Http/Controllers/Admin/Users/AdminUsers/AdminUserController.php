<?php

namespace App\Http\Controllers\Admin\Users\AdminUsers;

use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Requests\Users\AdminUserRequest;
use App\Models\Users\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends UserController
{
    public function index()
    {
        $adminUsers = AdminUser::where('user_type',1)->get();
        return view('admin.users.admin-users.index',compact('adminUsers'));
    }

    public function create()
    {
        return view('admin.users.admin-users.create');
    }

    public function store(AdminUserRequest $request)
    {
        $inputs = $request->validated();
        $inputs['user_type'] = 1;
        $inputs['password'] = Hash::make($request->password);
        $adminUser = AdminUser::create($inputs);
        return redirect()->route('admin_user.index')->with('toast-success','user created successfully');
    }

    public function edit(AdminUser $adminUser)
    {
        return view('admin.users.admin-users.edit',compact('adminUser'));
    }

    public function update(AdminUserRequest $request, AdminUser $adminUser)
    {
        $inputs = $request->validated();
        $inputs['user_type'] = 1;
        $inputs['password'] = Hash::make($request->password);
        $adminUser->update($inputs);
        return redirect()->route('admin_user.index')->with('toast-success','user update successfully');
    }

    public function destroy(AdminUser $adminUser)
    {
        $result = $adminUser->delete();
        return redirect()->route('admin_user.index')->with('toast-success','user delete successfully');
    }

}
