<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\PermissionRequest;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('created_at','desc')->get();
        return view('admin.users.permissions.index',compact('permissions'));
    }


    public function create()
    {
        return view('admin.users.permissions.create');
    }

    public function store(PermissionRequest $request)
    {
        $inputs = $request->all();
        $postCategory = Permission::create($inputs);
        return redirect()->route('permissions.index');
    }

    public function edit(Permission $permission)
    {
        return view('admin.users.permissions.edit',compact('permission'));
    }

    public function update(PermissionRequest $request,Permission $permission)
    {
        $inputs = $request->all();
        $permission->update($inputs);
        return redirect()->route('permissions.index');
    }

    public function destroy(Permission $permission)
    {
        $result = $permission->delete();
        return redirect()->route('permissions.index');
    }

    public function status(Permission $permission)
    {
        $permission->status = $permission->status == 0 ? 1 : 0;
        $result = $permission->save();
        if ($result)
        {
            if ($permission->status == 0)
            {
                return response()->json(['status' => true,'checked'=>false]);
            }
            else
            {
                return response()->json(['status' => true,'checked'=>true]);
            }
        }
        else
        {
            return response()->json(['status' => false]);
        }
    }

}
