    @extends('admin.layout.index')
    @section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Người dùng
                        <small>Sửa</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br />
                        @endforeach
                    </div>
                    @endif
                    @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    @endif
                    <form id="frmUser" action="admin/nguoi-dung/sua/{{$user->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Username</label>
                            <input disabled="" class="form-control" name="username" value="{{$user->username}}" placeholder="Nhập tên username" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input disabled="" class="form-control" name="email" value="{{$user->email}}" placeholder="Nhập email" />
                        </div>
                        <div class="form-group">
                            <input id="changePassword" type="checkbox" name="changePassword">
                            <label>Đổi mật khẩu</label>
                            <input disabled="" type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu" />
                        </div>
                         <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input disabled="" type="password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                        </div>
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" value="{{$user->fullname}}" name="fullname" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="form-group">
                            <label>Vai trò</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Chọn vai trò</option>
                                @foreach($roles as $role)   
                                <option
                                @if($user->role_id == $role->id)
                                {{"selected"}}
                                @endif
                                 value="{{$role->id}}"
                                >
                                    {{$role->name}}
                                </option>
                                @endforeach           
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Tôi là ...</option>
                                <?php 
                                    $genders = [
                                        'Nam' => 'Nam',
                                        'Nữ' => 'Nữ',
                                        'Khác' => 'Khác'
                                    ];
                                ?>
                                @foreach($genders as $gender)
                                <option 
                                @if($user->gender == $gender)
                                {{"selected"}}
                                @endif
                                value="{{$gender}}"
                                >
                                {{$gender}}
                                </option>
                                @endforeach
                                         
                            </select>
                        </div>
                        <div class="form-group">

                            {{getDay($user->birthday)}}
                            <label style="display: block;">Ngày sinh</label>
                            <select style="width: 80px; display: inline; margin-right: 7px" name="day" id="day" class="form-control">
                                <option value="">Ngày</option>
                                <?php 
                                    $days = range(1, 31);
                                    foreach ($days as $day) {
                                ?>
                                <option
                                    @if(getDay($user->birthday) == $day)
                                        {{"selected"}}
                                    @endif
                                     value="{{$day}}"
                                >
                                     {{$day}}
                                 </option>   
                                <?php } ?>      
                            </select>
                            <select style="width: 90px; display: inline; margin-right: 7px" name="month" id="month" class="form-control">
                                <option value="">Tháng</option>
                                <?php 
                                    $months = range(1, 12);
                                    foreach ($months as $month) {
                                ?>
                                <option
                                    @if(getMonth($user->birthday) == $month)
                                        {{"selected"}}
                                    @endif
                                    value="{{$month}}"
                                >
                                    {{$month}}
                                </option>   
                                <?php } ?>            
                            </select>
                            <select style="width: 80px; display: inline; " name="year" id="year" class="form-control">
                                <option value="">Năm</option>
                                <?php 
                                    $years = range(1905, 2016);
                                    foreach ($years as $year) {
                                ?>
                                <option
                                    @if(getYear($user->birthday) == $year)
                                        {{"selected"}}
                                    @endif
                                    value="{{$year}}"
                                >
                                    {{$year}}
                                </option>     
                                <?php } ?>            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tỉnh/thành phố</label>
                            <select name="city" id="city" class="form-control">
                                <option disabled selected value="">Chọn tỉnh/thành phố</option>
                                @foreach($cities as $city)
                                    <option
                                        @if($user->district->city->name == $city->name)
                                            {{"selected = 'selected'"}}
                                        @endif
                                         value="{{$city->id}}"
                                        >
                                        {{$city->name}}
                                    </option>
                                @endforeach
                            </select>   
                        </div>
                        <input type="hidden"  id="d" value="{{$user->district->id}}">
                        <div class="form-group">
                            <label>Quận/Huyện</label>
                            <select name="district" id="district" class="form-control">
                                            
                            </select>
                        </div>
                        <input type="hidden" id="w" value="{{$user->ward_id}}">
                        <div class="form-group">
                            <label>Xã/phường</label>
                            <select name="ward" id="ward" class="form-control">
                                            
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Khu vực sinh sống</label>
                            <input type="text" value="{{$user->address}}" class="form-control" name="address" placeholder="Nhập địa chỉ" />
                        </div>
                        <div class="form-group">
                            <label>Điện thoại cố định</label>
                            <input type="text" value="{{$user->landline}}" class="form-control" name="landline" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="form-group">
                            <label>Điện thoại di động</label>
                            <input type="text" value="{{$user->cellphone}}" class="form-control" name="cellphone" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ facebook</label>
                            <input type="text" value="{{$user->facebook}}" class="form-control" name="facebook" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="form-group">
                            <label>Tên skype</label>
                            <input type="text" value="{{$user->skype}}" class="form-control" name="skype" placeholder="Nhập họ và tên" />
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
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
        <script type="text/javascript">
            $(document).ready(function(){
                //Thay doi district khi chon city
                $('#city').change(function(){
                    var city_id = $(this).val();
                    $.get('ajax/'+city_id, function(data){
                        $('#district').html(data);
                    });
                });
                //thay doi ward khi chon district
                $('#district').change(function(){
                    var district_id = $(this).val();
                    $.get('ajax/ward/'+district_id, function(data){
                        $('#ward').html(data);
                    });
                });
                var city_id = $('#city').val();
                var district_id = $('#d').val();
                var ward_id = $('#w').val();
                //load district duoc chon sau khi load xong trang
                $.get('ajax/sd/'+city_id+'/'+district_id, function(data){
                    $('#district').html(data);
                });
                //load ward duoc chon sau khi load xong trang
                $.get('ajax/sw/'+district_id+'/'+ward_id, function(data){
                    $('#ward').html(data);
                });
                $("#changePassword").change(function(){
                    if($(this).is(":checked"))
                        $(".password").removeAttr('disabled');
                    else
                        $(".password").attr("disabled", "");
                });
            });
        </script>
        {!! JsValidator::formRequest('App\Http\Requests\StoreUserRequest', '#frmUser')->render(); !!}
    @endsection