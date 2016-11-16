<!-- header -->
<header>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-2 logo">
                    <a href="trang-chu"><img alt="Nhadat.vn" src="images/logo.jpg"></a>
                </div>
                <div class="col-md-10">
                    <div class="banner">
                        <embed width="100%" height="100%" class="img-responsive" src="images/ads/bn2.swf">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end banner -->
    <div class="header-link">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <form>
                        <ul class="main-search">                            
                            <li>
                                <input placeholder="Nhập từ khóa cần tìm kiếm..." type="text" class="form-control" name="keyword">
                            </li>
                            <li>
                                <select class="form-control"    >
                                    <option value="">Nhà bán</option>
                                    <option value="">Nhà cho thuê</option>
                                    <option value="">Cần mua nhà</option>
                                    <option value="">Cần thuê nhà</option>
                                </select>
                            </li>
                            <li>
                                <button type="button" class="btn btn-primary">Tìm kiếm</button>     
                            </li>                   
                        </ul>
                    </form>
                </div>
                <div class="pull-right">
                    <ul class="top-link">
                        <li><a href=""><img src="images/icons/google_search.jpg"></a></li>
                        <li><a href=""><img src="images/icons/facebook.jpg"></a></li>
                        <li><a href=""><img src="images/icons/google_plus.jpg"></a></li>
                        <li><a href="dang-tin-rao-nha"><img src="images/icons/raonha.jpg"></a></li>
                        @if(!isset($u))
                        <li><a href="dang-ky-thanh-vien"><img src="images/icons/dangki.jpg"></a></li>
                        <li><a href="dang-nhap"><img src="images/icons/dangnhap.jpg"></a></li>
                        @else
                        <li><a href="trang-ca-nhan"><img src="images/icons/user.jpg"><span><strong>{{$u->fullname}}</strong></span></a></li>
                        <li><a href="dang-xuat"><img src="images/icons/thoat.jpg"></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-nav">      
            <ul class="nav nav-pills">
               <li class="active">
                    <a href="trang-chu">Trang chủ</a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nhà bán &darr;</span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Bán nhà riêng</a></li>
                     <li><a href="#">Bán biệt thự</a></li>
                     <li><a href="#">Bán nhà mặt phố</a></li>
                     <li><a href="#">Bán căn hộ chung cư</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nhà cho thuê &darr;</span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Cho thuê nhà riêng</a></li>
                     <li><a href="#">Cho thuê biệt thự</a></li>
                     <li><a href="#">Cho thuê nhà mặt phố</a></li>
                     <li><a href="#">Cho thuê căn hộ chung cư</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cần thuê nhà &darr;</span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Cần thuê nhà riêng</a></li>
                     <li><a href="#">Cần thuê biệt thự</a></li>
                     <li><a href="#">Cần thuê nhà mặt phố</a></li>
                     <li><a href="#">Cần thuê căn hộ chung cư</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cần mua nhà &darr;</span></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Cần mua nhà riêng</a></li>
                     <li><a href="#">Cần mua biệt thự</a></li>
                     <li><a href="#">Cần mua nhà mặt phố</a></li>
                     <li><a href="#">Cần mua căn hộ chung cư</a></li>
                  </ul>
               </li>
               <li>
                    <a href="#">Dự án</a>
               </li>
               <li>
                    <a href="#">Tin tức</a>
               </li>
               <li>
                    <a href="#">Phong thủy</a>
               </li>
               <li>
                    <a href="#">Xây dựng - Kiến trúc</a>
               </li>
               <li>
                    <a href="#">Liên hệ</a>
               </li>
            </ul>           
        </div><!-- end #container -->
    </div>
</header>
<!--end header -->