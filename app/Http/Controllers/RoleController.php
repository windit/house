<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'roleName' => 'required|min:3|max:40|unique:roles,name',
            ],
            [
                'roleName.required' => 'Tên vai trò không được để trống',
                'roleName.min' => 'Tên vai trò không được ít hơn 3 kí tự',
                'roleName.max' => 'Tên vai trò không được nhiều hơn 40 kí tự',
                'roleName.unique' => 'Tên vai trò đã tồn tại'
            ]
        );
        $role = new Role();
        $role->name = $request->roleName;
        $role->slug = changeTitle($role->name);
        $role->save();
        return redirect('admin/vai-tro/them')->with('message', 'Bạn đã thêm thành công');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.role.edit', ['role' => $role]);
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
        $this->validate($request, 
            [
                'roleName' => 'required|min:3|max:40|unique:roles,name',
            ],
            [
                'roleName.required' => 'Tên vai trò không được để trống',
                'roleName.min' => 'Tên vai trò không được ít hơn 3 kí tự',
                'roleName.max' => 'Tên vai trò không được nhiều hơn 40 kí tự',
                'roleName.unique' => 'Tên vai trò đã tồn tại'
            ]
        );
        $role = Role::find($id);
        $role->name = $request->roleName;
        $role->slug = changeTitle($role->name);
        $role->save();
        return redirect('admin/vai-tro/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('admin/vai-tro/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
