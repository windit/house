@extends('layout.index')
@section('title')
	Quản lý trang cá nhân
@endsection
@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layout.person-left-bar')
				</div>
				<div class="col-md-7">
					<div class="content">
						ko co chi
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