<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

use Illuminate\Support\Facades\DB;

use Validator;

use JsValidator;

class UserController extends Controller
{
    public function __construct()
    {
        $roles = DB::table('roles')->orderBy('name', 'ASC')->get();
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        view()->share('cities', $cities);
        view()->share('roles', $roles);
    }

    protected $validationRules = [
        'username' => 'required|unique|min:4|max:100',
        'email' => 'email|unique|required',
        'password' => 'required|min:8|max:100', 
        'passwordAgain' => 'required|same:password',
        'fullname' => 'required|max:100',
        'role' => 'required',
        'gender' => 'required',
        'day' => 'required',
        'month' => 'required',
        'year' => 'required',
        'city' => 'required',
        'district' => 'required',
        'cellphone' => 'required'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function messages()
    {
        return [
            'username.required' => 'Bạn chưa nhập username',
            'username.unique' => 'Username đã tồn tại',
            'username.min' => 'Username phải có tối thiểu 4 kí tự',
            'username.max' => 'Username không được vượt quá 100 kí tự',  
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải tối thiểu 8 kí tự',
            'password.max' => 'Mật khẩu không được vượt quá 100 kí tự',
            'passwordAgain.required' => 'Bạn chưa xác nhận lại mật khẩu',
            'passwordAgain.same' => 'Xác nhận lại mật khẩu không đúng',
            'fullname.required' => 'Bạn chưa nhập họ tên',
            'fullname.max' => 'Tên không được vượt quá 100 kí tự',
            'role.required' => 'Bạn chưa chọn vai trò',
            'gender.required' => 'Bạn chưa chọn giới tính',
            'day.required'=> 'Bạn chưa nhập ngày sinh',
            'month.required' => 'Bạn chưa nhập tháng sinh',
            'year.required' => 'Bạn chưa nhập năm sinh',
            'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
            'district.required' => 'Bạn chưa chọn quận/huyện',
            'cellphone.required' => 'Bạn chưa nhập điện thoại di động'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $v = Validator::make($request->all(), $this->validationRules, $messages);
        if($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->fullname = $request->fullname;
        $user->role_id = $request->role;
        $user->gender = $request->gender;
        $user->birthday = $request->year.'-'.$request->month.'-'.$request->day;
        $user->district_id = $request->district;
        $user->ward_id = $request->ward;
        $user->address = $request->address;
        $user->landline = $request->landline;
        $user->cellphone = $request->cellphone;
        $user->facebook = $request->facebook;
        $user->skype = $request->skype;
        $user->save();
        return redirect('admin/nguoi-dung/them')->with('message', 'Thêm thành công');
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
        $user = User::find($id);
        $roles = DB::table('roles')->orderBy('name', 'ASC')->get();
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        return view('admin.user.edit', ['user' => $user]);
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
        $user = User::find($id);
        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
        }
        $user->fullname = $request->fullname;
        $user->role_id = $request->role;
        $user->gender = $request->gender;
        $user->birthday = $request->year.'-'.$request->month.'-'.$request->day;
        $user->district_id = $request->district;
        $user->ward_id = $request->ward;
        $user->address = $request->address;
        $user->landline = $request->landline;
        $user->cellphone = $request->cellphone;
        $user->facebook = $request->facebook;
        $user->skype = $request->skype;
        $user->save();
        return redirect('admin/nguoi-dung/sua/'.$id)->with('message', 'Sửa thành công');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
