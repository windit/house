@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form id="frmUser" action="admin/nguoi-dung/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Nhập tên username" />
                        <span class="error">{{$errors->first('username')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Nhập email" />
                        <span class="error">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                        <span class="error">{{$errors->first('password')}}</span>
                    </div>
                     <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                        <span class="error">{{$errors->first('passwordAgain')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Nhập họ và tên" />
                        <span class="error">{{$errors->first('fullname')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Vai trò</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Chọn vai trò</option>
                            @foreach($roles as $role)   
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach           
                        </select>
                        <span class="error">{{$errors->first('role')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Tôi là ...</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>           
                        </select>
                        <span class="error">{{$errors->first('gender')}}</span>
                    </div>
                    <div class="form-group">
                        <label style="display: block;">Ngày sinh</label>
                        <select style="width: 80px; display: inline; margin-right: 7px" name="day" id="day" class="form-control">
                            <option value="">Ngày</option>
                             
                        </select>
                        <span class="error">{{$errors->first('day')}}</span>
                        <select style="width: 90px; display: inline; margin-right: 7px" name="month" id="month" class="form-control">
                            <option value="">Tháng</option>                    
                        </select>
                        <span class="error">{{$errors->first('month')}}
                        <select style="width: 80px; display: inline; " name="year" id="year" class="form-control">
                            <option value="">Năm</option>                
                        </select>
                        <span class="error">{{$errors->first('year')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Tỉnh/thành phố</label>
                        <select name="city" id="city" class="form-control">
                            <option disabled selected value="">Chọn tỉnh/thành phố</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('city')}}</span>
                    </div>
                    <div>
                        <label>Quận/huyện</label>
                        <select name="district" id="district" class="form-control">
                            <option value="">Chọn quận/huyện</option>              
                        </select>
                        <span class="error">{{$errors->first('district')}}</span>
                    </div>

                    <div>
                        <label>Xã/phường</label>
                        <select name="ward" id="ward" class="form-control">
                            <option value="">Chọn xã/phường</option>              
                        </select>
                    
                    </div>
                    <div class="form-group">
                        <label>Khu vực sinh sống</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập khu vực sinh sống" />
                    </div>
                    <div class="form-group">
                        <label>Điện thoại cố định</label>
                        <input type="text" class="form-control" name="landline" placeholder="Nhập điện thoại cố định" />
                    </div>
                    <div class="form-group">
                        <label>Điện thoại di động</label>
                        <input type="text" class="form-control" name="cellphone" placeholder="Nhập điện thoại di động" />
                        <span class="error">{{$errors->first('cellphone')}}</span>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ facebook</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Nhập địa chỉ facebook" />
                    </div>
                    <div class="form-group">
                        <label>Tên skype</label>
                        <input type="text" class="form-control" name="skype" placeholder="Nhập tên skype" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreUserRequest', '#frmUser')->render(); !!}
@endsection