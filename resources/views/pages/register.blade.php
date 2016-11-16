@extends('layout.index')
@section('title')
Trang đăng ký thành viên
@endsection
@section('content')
<!-- Page Content -->
<section>
	<div class="container">
	    <div class="row">
	        <div class="frm-register col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">
	            <legend><a href="http://hocwebgiare.com"><i class="glyphicon glyphicon-user"></i></a>&nbsp;Đăng ký thành viên!</legend>
	            <form action="http://hocwebgiare.com" method="post" class="form" role="form">
	                <input class=" form-control" name="username" placeholder="Họ tên" type="text" />
	                <input class=" form-control" name="youremail" placeholder="Email" type="email" />
	                <input class=" form-control" name="password" placeholder="Mật khẩu" type="password" />
	                <input class=" form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password" />
	                <input class=" form-control" name="fullname" placeholder="Nhập họ tên" type="text" />
	                <label>Giới tính</label>
                    <select name="gender" id="gender" class="  form-control">
                        <option value="">Tôi là ...</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>           
                    </select>
	                
                    <label style="display: block;">Ngày sinh</label>
                    <select style="width: 100px; display: inline; margin-right: 7px" name="day" id="day" class="form-control">
                        <option value="">Ngày</option>
                        <?php 
                            $days = range(1, 31);
                            foreach ($days as $day) {
                        ?>
                        <option value="{{$day}}">{{$day}}</option>   
                        <?php } ?>      
                    </select>
                    <select style="width: 100px; display: inline; margin-right: 7px" name="month" id="month" class="form-control">
                        <option value="">Tháng</option>
                        <?php 
                            $months = range(1, 12);
                            foreach ($months as $month) {
                        ?>
                        <option value="{{$month}}">{{$month}}</option>   
                        <?php } ?>            
                    </select>
                    <select style="width: 100px; display: inline; " name="year" id="year" class="form-control">
                        <option value="">Năm</option>
                        <?php 
                            $years = range(1905, 2016);
                            foreach ($years as $year) {
                        ?>
                        <option value="{{$year}}">{{$year}}</option>   
                        <?php } ?>            
                    </select>
	               

	               	<label style="display: block;">Địa chỉ</label>
	               	<select name="city" id="city" class="form-control">
                        <option disabled selected value="">Chọn tỉnh/thành phố</option>
                       
                    </select>
                    <select name="district" id="district" class="form-control">
                        <option value="">Chọn quận/huyện</option>              
                    </select>
                    <select name="ward" id="ward" class="form-control">
                        <option value="">Chọn xã/phường</option>              
                    </select>

             
                    <input type="text" class="form-control" name="address" placeholder="Nhập khu vực sinh sống" />

                
                    <input type="text" class="form-control" name="landline" placeholder="Nhập điện thoại cố định" />

               
                    <input type="text" class="form-control" name="cellphone" placeholder="Nhập điện thoại di động" />

                  
                    <input type="text" class="form-control" name="facebook" placeholder="Nhập địa chỉ facebook" />

             
                    <input type="text" class="form-control" name="skype" placeholder="Nhập tên skype" />

	                
	                <br />
	                <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>
	            </form>
	        </div>
	    </div>
	</div>	
</section><!--end section-->
@endsection