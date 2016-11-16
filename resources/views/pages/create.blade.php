@extends('layout.index')
@section('title')
Đăng tin rao nhà
@endsection
@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@include('layout.left-bar')
			</div>
			<div class="col-md-7">
				<div class="content">
					@if(session('message'))
		                <div class="alert alert-success">
		                    <strong>Bạn đã đăng tin thành công với mã tin là $house->id, tin này sẽ được kiểm duyệt trong vòng 48 giờ tới, bạn có thể vào quản lý tin đăng trong tài khoản của mình để xem chi tiết và chỉnh sửa tin bạn vừa mới đăng!
		                    </strong>
		                </div>
	                @else
						<div class="form-group">
							<div class="page-content">
								<h2>Đăng tin rao</h2>
							</div>				
						</div>
						<form role="form" id="frmCreateHouse" action="dang-tin-rao-nha" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="dang-tin">
							<div class="row">
							    <label for="title">Tiêu đề</label>
							    <input type="text" name="title" class="form-control" id="title" placeholder="Nhập nội dung">
							    <span class="error">{{$errors->first('title')}}</span>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Hình thức nhà</label>
									<select id="category" name="category" class="form-control">
										<option value="">--Chọn hình thức nhà--</option>
										@foreach($categories as $category)
						                    <option value="{{$category->id}}">{{$category->name}}</option>
						                @endforeach
									</select>
									<span class="error">{{$errors->first('category')}}</span>
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Loại nhà</label>
									<select name="kind" id="kind" class="form-control">
										<option value="">--Chọn loại nhà--</option>
									</select>
									<span class="error">{{$errors->first('kind')}}</span>
								</div>
							    
							</div>
							
							<div class="row">
							    <label for="info">Nội dung</label>
							   	<input type="text" name="info" class="form-control" name="">
							   	<span class="error">{{$errors->first('info')}}</span>
							</div>
							<div class="row">
							    <label >Chọn hình ảnh (Chọn tối đa 3 file ảnh)</label>
							    <input type="file" name="image1" />
							    <span class="error">{{$errors->first('image1')}}</span>
							    <input type="file" name="image2" />
							    <span class="error">{{$errors->first('image2')}}</span>
							    <input type="file" name="image3" />
							    <span class="error">{{$errors->first('image3')}}</span>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Tỉnh/thành phố</label>
									<select id="city" name="city" class="form-control">
										<option value="">--Chọn tỉnh/thành phố--</option>
										@foreach($cities as $city)
						                <option value="{{$city->id}}">{{$city->name}}</option>
						                @endforeach
									</select>
									<span class="error">{{$errors->first('city')}}</span>
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Quận/huyện</label>
									<select id="district" name="district" class="form-control">
										<option value="">--Chọn quận huyện--</option>
									</select>
									<span class="error">{{$errors->first('district')}}</span>
								</div>	    
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Xã/phường</label>
									<select id="ward" name="ward" class="form-control">
										<option value="">--Chọn xã/phường--</option>
									</select>
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Đường/phố</label>
									<select id="street" name="street" class="form-control">
										<option value="">--Chọn đường/phố--</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Dự án</label>
									<select id="project" name="project" class="form-control">
										<option value="">--Chọn dự án--</option>
									</select>
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Diện tích (m<sup>2</sup>)</label>
									<input type="number" min="1" max="20" name="area" class="form-control" id="area" placeholder="Nhập diện tích" />
								</div>
							</div>
							<div class="row">
							    <label>Địa chỉ</label>
							    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
							</div>
							<div class="row">
								<div class="row">
									<div class="col-md-5">
										<label>Hướng nhà</label>
										<select id="trend" name="trend" class="form-control">
											<option value="">--Chọn hướng nhà--</option>
											@foreach($trends as $trend)
							                <option value="{{$trend->id}}">{{$trend->name}}</option>
							                @endforeach
										</select>
										<span class="error">{{$errors->first('trend')}}</span>
									</div>
								   	<div class="col-md-5 col-md-offset-2">
										<label>Mặt tiền (m<sup>2</sup>)</label>
										<input type="number" min="1" max="20" name="frontispiece" class="form-control" placeholder="Nhập độ rộng mặt tiền" />
										
									</div>
									</div>
								</div>
							<div class="row">
								<div class="col-md-5">
									<label>Đường vào (m)</label>
									<input type="number" min="1" max="20" name="entrance" class="form-control" placeholder="Nhập độ rộng đường vào" />
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Số tầng</label>
									<input type="number" name="NumberOfFloors" min="1" max="200" class="form-control" placeholder="Nhập số tầng" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Số phòng ngủ</label>
									<input type="number" min="1" max="100" name="NumberOfBedrooms" class="form-control" placeholder="Nhập số phòng ngủ" />
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Số toilet</label>
									<input type="number" min="1" max="10" name="NumberOfToilets" class="form-control" placeholder="Nhập số toilet" />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-5">					
									<div class="col-md-3">
										<label>Giá tiền</label>
										<input id="price" type="number" min="1" max="4294967295" name="price" class="form-control" placeholder="" />
										<span class="error">{{$errors->first('price')}}</span>
									</div>
								   	<div class="col-md-7 col-md-offset-2">
										<label>Đơn vị tiền</label>
										<select name="unit" class="form-control">
											<option value="thoathuan">Thỏa thuận</option>
											<option value="nghin">nghìn</option>
											<option value="trieu">triệu</option>
											<option value="ty">tỷ</option>
										</select>
									</div>
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Ngày hết hạn</label>
									<div class="form-group">
										<div class="col-md-3">
											<select name="day" style="padding: 0px" class="form-control">
												<option value="">Ngày</option>
												<?php 
				                                    $days = range(1, 31);
				                                    foreach ($days as $day) {
				                                ?>
				                                <option value="{{$day}}">
				                                     {{$day}}
				                                 </option>   
				                                <?php } ?>   						
											</select>
											<span class="error">{{$errors->first('day')}}</span>
										</div>
										<div class="col-md-3">
											<select name="month" style="padding: 0px" class="form-control col-md-offset-2">
												<option value="">Tháng</option>
												<?php 
				                                    $months = range(1, 12);
				                                    foreach ($months as $month) {
				                                ?>
				                                <option value="{{$month}}">
				                                     {{$month}}
				                                 </option>   
				                                <?php } ?>  
											</select>
											<span class="error">{{$errors->first('month')}}</span>
										</div>
										<div class="col-md-4 col-md-offset-1">
											<select name="year" style="padding: 0px" class="form-control">
												<option value="">Năm</option>
												<?php 
				                                    $years = range(date('Y'), date('Y')+1);
				                                    foreach ($years as $year) {
				                                ?>
				                                <option value="{{$year}}">
				                                     {{$year}}
				                                 </option>   
				                                <?php } ?>  
											</select>
											<span class="error">{{$errors->first('year')}}</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<label>Nội thất</label>
								<input name="furniture" class="form-control" type="" name=""/>
							</div>
							<div class="contactInfomation">
								<h3>Thông tin liên hệ</h3>
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Tên liên hệ</label>
									<input name="ContactName" type="text" class="form-control" placeholder="Nhập tên liên hệ" />
									<span class="error">{{$errors->first('ContactName')}}</span>
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Email</label>
									<input type="text" name="email" class="form-control" placeholder="Nhập địa chỉ email" />
								</div>
							</div>
							<div class="row">
								<label>Địa chỉ</label>
								<input type="text" name="ContactAddress" placeholder="Nhập địa chỉ liên hệ" class="form-control"  />
							</div>
							<div class="row">
								<div class="col-md-5">
									<label>Điện thoại</label>
									<input type="text" name="landline" class="form-control" placeholder="Nhập số điện thoại cố định" />
								</div>
							   	<div class="col-md-5 col-md-offset-2">
									<label>Điện thoại di động</label>
									<input type="text" name="cellphone" class="form-control" placeholder="Nhập số điện thoại di động" />
									<span class="error">{{$errors->first('cellphone')}}</span>
								</div>
							</div>
							<button type="submit" class="pull-right btn btn-primary">Đăng tin</button>		
						</div>
						</form>
					@endif
				</div><!--end .content -->
			</div>
			<!-- ads -->
			<div class="col-md-2">
				@include('layout.ads')
			</div>
			<!-- end ads -->
		</div>
	</div>		
</section><!--end section-->
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreHouseRequest', '#frmCreateHouse')->render(); !!}
@endsection
