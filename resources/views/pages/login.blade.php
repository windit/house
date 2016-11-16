@extends('layout.index')
@section('title')
Trang đăng nhập
@endsection
@section('content')
<!-- Page Content -->
<section>
	<div class="container">
	    <div class="row">
	        <div id="form_wrapper" class="form_wrapper">
	        	@if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br />
                    @endforeach
                </div>
                @endif
                @if(session('message'))
                <div class="alert alert-danger">
                    {{session('message')}}
                </div>
                @endif
				<form id="frmLogin" class="login active" method="POST" action="dang-nhap">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<h3>Đăng nhập</h3>
					<div>
						<label>Email:</label>
						<input class="form-control" name="email" type="text" value="" />
					</div>
					<div>
						<label>Password: 
							<a href="forgot_password.html" rel="forgot_password" class="forgot linkform">
								Quên mật khẩu?
							</a>
						</label>
						<input class="form-control" name="password" type="password" value="" />
					</div>
					<div class="bottom">
						<div class="remember"><input type="checkbox" />
							<span>Duy trì đăng nhập</span>
						</div>
						<input type="submit" value="Đăng nhập" />
						<a href="register.html" rel="register" class="linkform">
							Bạn chưa có tài khoản? Đăng kí tại đây
						</a>
						<div class="clear"></div>
					</div>
				</form>
	        </div>
	    </div>
	</div>	
</section>
<!-- end Page Content -->
@endsection
@section('script')
	{!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#frmLogin')->render(); !!}
@endsection