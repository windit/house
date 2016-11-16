@extends('layout.index')
@section('title')
Trang chi tiết tin
@endsection
@section('content')
<!-- content -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@include('layout.left-bar')
			</div>
			<div class="col-md-7">
				<div class="content">
					<div class="house-title">
						<h1>Bán 9 căn nhà phố 3L tk C.Âu hẻm ôtô 4 chỗ P.Đ.Lưu</h1>
					</div>
					<div class="even">
						<strong>Hình thức nhà: </strong>
						Nhà bán
					</div>
					<div class="odd">
						<strong>Loại nhà: </strong>
						Bán căn hộ chung cư
					</div>
					<div class="even">
						<strong>Thành viên đăng tin: </strong>
						<a href="#">Nguyễn Văn Anh</a>
					</div>
					<div class="odd">
						<strong>Thông tin chi tiết:</strong>
						<p>
							Thửa đất cách đường cao tốc Cửa Đại 20m. Thuộc thôn Cồn Nhàn, xã Cẩm Thanh. Đây là khu vực đang phát triển rất nhanh, gồm rất nhiều cơ sở du lịch, khách du lịch. Kích thước Phong Thủy rất đẹp. Rất thuận tiện cho việc kinh doanh du lịch và ở nghỉ dưỡng.
							Bề rộng 7m, bề sâu 21m, DT 145m2 ( gồm 88m2 đất ở và 57m2 đất trồng cây lâu năm) Hướng Đông Bắc.
							Giá: thương lượng
							Liên hệ: Anh Bảo. 0903.773.868

							The land plot is located just 20 m away from Cua Dai expressway. 
							Address:  Con Nhan village, Cam Thanh Commune, Hoi An, Quang Nam. It is a fast developing area with various tourist attractions. Very good fengshui.Suitable for doing business, living or relaxation. 
							Width: 7m. Length: 21m. Area 145m2. North-East view!
						</p>
					</div>
					<div class="even">
						<strong>Tỉnh/thành phố: </strong>
						Hồ Chí Minh
					</div>
					<div class="odd">
						<strong>Quận/huyện: </strong>
						Quận 1
					</div>
					<div class="even">
						<strong>Xã/phường: </strong>
						Phường 6
					</div>
					<div class="odd">
						<strong>Đường/phố: </strong>
						Nguyễn Đình Chiểu
					</div>
					<div class="even">
						<strong>Dự án: </strong>
						Vinhome city
					</div>
					<div class="odd">
						<strong>Địa chỉ: </strong>
						123 Nguyễn Văn Trỗi
					</div>
					<div class="even">
						
						<strong>Hình ảnh </strong>
					</div>
					<div id="myCarousel" class="carousel slide odd" data-ride="carousel">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>
					    <!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox">
					        <div class="item active">
					            <img src="images/houses/1.jpg" alt="Chania">
					        </div>
					        <div class="item">
					            <img src="images/houses/2.jpg" alt="Chania">
					        </div>
					        <div class="item">
					            <img src="images/houses/3.jpg" alt="Chania">
					        </div>
					        <div class="item">
					            <img src="images/houses/4.jpg" alt="Chania">
					        </div>
					    </div>
					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					    </a>
					</div>
					<div class="odd">
						<strong>Diện tích: </strong>
						100 m<sup>2</sup>
					</div>
					<div class="even">
						<strong>Giá: </strong>
						1 tỉ
					</div>
					<div class="odd">
						<strong>Hướng nhà: </strong>
						Đông Nam
					</div>
					<div class="even">
						<strong>Mặt tiền </strong>
						8 mét
					</div>
					<div class="odd">
						<strong>Đường vào: </strong>
						2 mét
					</div>
					<div class="even">
						<strong>Số tầng </strong>
						2
					</div>
					<div class="odd">
						<strong>Số phòng ngủ: </strong>
						4
					</div>
					<div class="even">
						<strong>Số toilet:</strong>
						2
					</div>
					<div class="odd">
						<strong>Nội thất: </strong>
						Đầy đủ đồ đạc sinh hoạt
					</div>
					<div class="even">
						<strong>Ngày hết hạn: </strong>
						12/12/2016 
					</div>
					<div class="contactInfomation">
						<h3>Thông tin liên hệ</h3>
					</div>
					<div class="odd">
						<strong>Tên liên hệ: </strong>
						Nguyễn Văn Anh
					</div>
					<div class="even">
						<strong>Email: </strong>
						vananh@gmail.com
					</div>
					<div class="odd">
						<strong>Địa chỉ liên hệ: </strong>
						Nguyễn Văn Anh đường Phạm Như Xương
					</div>
					<div class="even">
						<strong>Điện thoại: </strong>
						0510999999
					</div>
					<div class="odd">
						<strong>Điện thoại di động: </strong>
						0987654321
					</div>
				</div><!--end .content -->
			</div>
			<div class="col-md-2">
				@include('layout.ads')
			</div>
		</div>
	</div>		
</section><!--end section-->
@endsection