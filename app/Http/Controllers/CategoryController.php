<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
                'CategoryName' => 'required|min:3|max:30|unique:categories,name',
            ],
            [
                'CategoryName.required' => 'Tên thể loại không được để trống',
                'CategoryName.min' => 'Tên thể loại không được ít hơn 3 kí tự',
                'CategoryName.max' => 'Tên thể loại không được nhiều hơn 30 kí tự',
                'CategoryName.unique' => 'Tên thể loại đã tồn tại'
            ]
        );
        $category = new Category();
        $category->name = $request->CategoryName;
        $category->slug = changeTitle($category->name);
        $category->save();
        return redirect('admin/the-loai/them')->with('message', 'Bạn đã thêm thành công');
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
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
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
                'CategoryName' => 'required|min:3|max:30|unique:categories,name',
            ],
            [
                'CategoryName.required' => 'Tên thể loại không được để trống',
                'CategoryName.min' => 'Tên thể loại không được ít hơn 3 kí tự',
                'CategoryName.max' => 'Tên thể loại không được nhiều hơn 30 kí tự',
                'CategoryName.unique' => 'Tên thể loại đã tồn tại'
            ]
        );
        $category = Category::find($id);
        $category->name = $request->CategoryName;
        $category->slug = changeTitle($category->name);
        $category->save();
        return redirect('admin/the-loai/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/the-loai/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
