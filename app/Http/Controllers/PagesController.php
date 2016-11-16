<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\House;

use App\Image;

use Validator;

class PagesController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request, $next){
            view()->share('categories', DB::table('categories')->orderBy('name', 'ASC')->get());
            view()->share('kinds', DB::table('kinds')->orderBy('name', 'ASC')->get());
            view()->share('cities', DB::table('cities')->orderBy('name', 'ASC')->get());
            view()->share('trends', DB::table('trends')->get());
            if(Auth::check())
            {
                view()->share('u', Auth::user());
            }
            
            return $next($request);
        });
    }

    function getLogin()
    {
        if(!Auth::check())
    	   return view('pages.login');
        else
            return redirect('trang-chu');
    }

    function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'email|required',
                'password' => 'required|min:8|max:100', 
            ],
            [
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Vui lòng nhập đúng định dạng email',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu phải tối thiểu 8 kí tự',
                'password.max' => 'Mật khẩu không được vượt quá 100 kí tự',
            ]
        );
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
    		return redirect('trang-chu');
    	else
    		return redirect('dang-nhap')->with('thongbao', 'Đăng nhập không thành công');
    }

    function getLogout()
    {
        Auth::logout();
        return redirect('trang-chu');
    }

    function index()
    {
        // $houses = DB::table('houses')->orderBy('id', 'DESC')->get();
        $houses = House::orderBy('id', 'DESC')->get();
        $image = Image::where('house_id', 2)->take(1)->get();
        return view('pages.index', ['image' =>$image, 'houses' => $houses]);
    }

    function getRegister()
    {
        return view('pages.register');
    }

    function postRegister(Request $request)
    {
        
    }

    function detail($id)
    {
        $house = House::find($id);
        return view('pages.detail', ['house' => $house]);
    }

    function getCreateHouse()
    {
        // if(!Auth::check())
        //     return redirect('dang-nhap')->with('message', 'Bạn phải đăng nhập trước khi truy cập trang này!');
        return view('pages.create');
    }

    protected $validationRules = [
        'title'=>'required|min:10|max:255',
        'category'=>'required',
        'kind'=>'required',
        'info'=>'required|min:20|max:3000',
        'city'=>'required',
        'district'=>'required',
        'address'=>'max:255',
        'trend'=>'required',
        'price'=>'required',
        'day'=>'required',
        'month'=>'required',
        'year'=>'required',
        'ContactName'=>'required|max:255',
        'cellphone'=>'required',
        'image1' => 'mimes:jpeg,jpg,png',
        'image2' => 'mimes:jpeg,jpg,png',
        'image3' => 'mimes:jpeg,jpg,png',

    ];

    protected $messages = [
        'title.required'=>'Vui lòng nhập tiêu đề',
        'title.min'=>'Tiêu đề phải chứa ít nhất 10 kí tự',
        'title.max'=>'Tiêu đề không được vượt quá 255 kí tự',
        'category.required'=>'Vui lòng chọn hình thức nhà',
        'kind.required'=>'Vui lòng chọn loại nhà',
        'info.required'=>'Vui lòng nhập thông tin nhà',
        'info.min'=>'Thông tin nhà không phải chứa ít nhất 20 kí tự',
        'info.max'=>'Thông tin nhà không được vượt quá 3000 kí tự',
        'city.required'=>'Vui lòng chọn tỉnh/thành phố',
        'district.required'=>'Vui lòng chọn quận/huyện',
        'district.min'=>'Địa chỉ nhà phải chứa ít nhất 5 kí tự',
        'address.max'=>'Địa chỉ nhà không được vượt quá 255 kí tự',
        'trend.required'=>'Vui lòng chọn hướng nhà',
        'price.required'=>'Vui lòng nhập giá bán nhà',
        'day.required'=>'Vui lòng chọn ngày hết hạn',
        'month.required'=>'Vui lòng chọn tháng hết hạn',
        'year.required'=>'Vui lòng chọn năm hết hạn',
        'ContactName.required'=>'Vui lòng nhập tên liên lạc',
        'cellphone.required'=>'Vui lòng nhập số điện thoại liên lạc',
        'image1.mimes'=>'Vui lòng chọn file ảnh có đuôi jpg, jpeg, png',
        'image2.mimes'=>'Vui lòng chọn file ảnh có đuôi jpg, jpeg, png',
        'image3.mimes'=>'Vui lòng chọn file ảnh có đuôi jpg, jpeg, png',
    ];

    function postCreateHouse(Request $request)
    {
        $v = Validator::make($request->all(), $this->validationRules, $this->messages);
        if($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $house = new House;
        // $house->author_id = Auth::user()->id;
        $house->author_id = 1;
        $house->title = $request->title;
        $house->kind_id = $request->kind;
        $house->title = $request->title;
        $house->slug = changeTitle($house->title);
        $house->info = $request->info;
        $house->status = 0;
        $house->view_count = 0;
        $house->feature = 0;
        $house->area = $request->area;
        $house->district_id = $request->district;
        $house->ward_id = $request->ward;
        if($request->street != '')
            $house->street_id = $request->street;
        if($request->project != '')
            $house->project_id = $request->project;
        $house->address = $request->address;
        $house->frontispiece = $request->frontispiece;
        $house->NumberOfFloors = $request->NumberOfFloors;
        $house->NumberOfToilets = $request->NumberOfToilets;
        if($request->unit == 'thoathuan')
            $house->price = 0;
        else if($request->unit == 'nghin')
            $house->price = intval($request->house);
        else if($request->unit == 'trieu')
            $house->price = intval($request->price)*1000;
        else
            $house->price = intval($request->price)*1000000;
        $house->NumberOfBedrooms = $request->NumberOfBedrooms;
        $house->furniture = $request->furniture;
        $house->trend_id = $request->trend;
        $house->entrance = $request->entrance;
        $house->ContactName = $request->ContactName;
        $house->ContactAddress = $request->ContactAddress;
        $house->landline = $request->landline;
        $house->cellphone = $request->cellphone;
        $house->email = $request->email;
        $house->created_at = date("Y-m-d H:i:s");
        $house->updated_at = date("Y-m-d H:i:s");
        $house->expiration_time = $request->year.'-'.$request->month.'-'.$request->day.' 00:00:00';
        // $house->expiration_time = '2016-11-12 23:41:46';
        // upload images
        // echo '<pre>';
        // print_r($house);
        // echo '</pre>';

        $house->save();
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $i=0;
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = $i.time().'.'.$extension;
            $destinationPath = base_path() . '\public\images\house';
            $file->move($destinationPath, $picture);
            $image = new Image;
            $image->house_id = $house->id;
            $image->name = $picture;
            $image->save();
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $i=1;
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = $i.time().'.'.$extension;
            $destinationPath = base_path() . '\public\images\house';
            $file->move($destinationPath, $picture);
            $image = new Image;
            $image->house_id = $house->id;
            $image->name = $picture;
            $image->save();
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $i=2;
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = $i.time().'.'.$extension;
            $destinationPath = base_path() . '\public\images\house';
            $file->move($destinationPath, $picture);
            $image = new Image;
            $image->house_id = $house->id;
            $image->name = $picture;
            $image->save();
        }
        return redirect('dang-tin-rao-nha')->with("message", "Bạn đã đăng tin thành công với mã tin là $house->id, tin này sẽ được kiểm duyệt trong vòng 48 giờ tới, bạn có thể vào quản lý tin đăng trong tài khoản của mình để xem chi tiết và chỉnh sửa tin bạn vừa mới đăng!");
    }

    function person()
    {
        return view('pages.person');
    }
}
    