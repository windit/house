<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streets = Project::paginate(10);
        return view('admin.project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        return view('admin.project.create', ['cities' => $cities]);
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
                'city' => 'required',
                'district' =>'required',
                'StreetName' => 'required',
            ],
            [
                'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
                'district.required' => 'Bạn chưa chọn quận/huyện',
                'StreetName.required' => 'Tên đường/phố không được để trống',
            ]
        );
        //echo $request->StreetName;
        $project = new Project;
        $project->name = $request->ProjectName;
        $project->district_id = $request->district;
        $project->slug = changeTitle($project->name);
        $project->save();
       return redirect('admin/du-an/them')->with('message', 'Bạn đã thêm thành công');
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
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        $project = Project::find($id);
        return view('admin.project.edit', ['project' => $project, 'cities' => $cities]);
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
                'city' => 'required',
                'district' =>'required',
                'StreetName' => 'required',
            ],
            [
                'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
                'district.required' => 'Bạn chưa chọn quận/huyện',
                'StreetName.required' => 'Tên đường/phố không được để trống',
            ]
        );
        $project = Project::find($id);
        $project->name = $request->ProjectName;
        $project->district_id = $request->district;
        $project->slug = changeTitle($project->name);
        if($project->save())
        return redirect('admin/du-an/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
        else
            echo 'loi';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('admin/du-an/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
