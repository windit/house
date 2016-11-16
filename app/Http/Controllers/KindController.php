<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kind;

use App\Category;


class KindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kinds = Kind::all();
        return view('admin.kind.index', ['kinds' => $kinds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.kind.create', ['categories' => $categories]);
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
                'KindName' => 'required|min:3|max:30',
                'category' => 'required'
            ],
            [
                'KindName.required' => 'Tên loại nhà không được để trống',
                'KindName.min' => 'Tên loại nhà không được ít hơn 3 kí tự',
                'KindName.max' => 'Tên loại nhà không được nhiều hơn 30 kí tự',
                'category.required' => 'Vui lòng chọn hình thức nhà'
            ]
        );
        $kind = new Kind;
        $kind->name = $request->KindName;
        $kind->slug = changeTitle($kind->name);
        $kind->cateory_id = $request->category;
        $kind->save();
        return redirect('admin/loai-nha/them')->with('message', 'Bạn đã thêm thành công');
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
        $kind = Kind::find($id);
        return view('admin.kind.edit', ['kind' => $kind]);
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
                'KindName' => 'required|min:3|max:30',
            ],
            [
                'KindName.required' => 'Tên loại nhà không được để trống',
                'KindName.min' => 'Tên loại nhà không được ít hơn 3 kí tự',
                'KindName.max' => 'Tên loại nhà không được nhiều hơn 30 kí tự',
            ]
        );
        $kind = Kind::find($id);
        $kind->name = $request->KindName;
        $kind->slug = changeTitle($kind->name);
        $kind->save();
        return redirect('admin/loai-nha/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kind = Kind::find($id);
        $kind->delete();
        return redirect('admin/loai-nha/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
