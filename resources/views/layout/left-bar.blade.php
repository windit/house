<!-- left-bar -->
<div class="left-bar">
    <div class="detail-search">         
        <form action="" method="">
            <div class="row">
                <img class="img-responsive" alt="" src="images/detail-search.jpg" />
            </div>
            <div class="row">
                <select id="scategory" name="scategory" class="form-control">
                    <option value="">--Chọn thể loại nhà--</option>
                    @foreach($categories->take(20) as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <select id="skind" name="skind" class="form-control">
                    <option value="">--Chọn loại nhà--</option>
                </select>
            </div>
            <div class="row">
                <select name="scity" id="scity" class="form-control">
                    <option value="">--Chọn tỉnh/thành phố--</option>
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="row">
                <select name="sdistrict" id="sdistrict" class="form-control">
                    <option value="">--Chọn quận/huyện--</option>
                </select>
            </div>
            <div class="row">
                <select name="sward" id="sward" class="form-control">
                    <option value="">--Chọn xã/phường--</option>
                </select>
            </div>
            <div class="row">
                <select class="form-control">
                    <option value="">--Chọn đường phố--</option>
                </select>
            </div>
            <div class="advanced-search" id="advacedSearch">
                <div class="row">
                    <div class="col-md-5">
                        <select  class="min-price form-control">
                            <option value="">Giá thấp nhất</option>
                            <option value=0>Thỏa thuận</option>
                            <option value=10000>10 nghìn</option>
                            <option value=100000>100 nghìn</option>
                            <option value=500000>500 nghìn</option>
                            <option value=1000000>1 triệu</option>
                            <option value=5000000>5 triệu</option>
                            <option value=10000000>10 triệu</option>
                            <option value=50000000>50 triệu</option>
                            <option value=100000000>100 triệu</option>
                            <option value=200000000>200 triệu</option>
                            <option value=300000000>300 triệu</option>
                            <option value=400000000>400 triệu</option>
                            <option value=500000000>500 triệu</option>
                            <option value=600000000>600 triệu</option>
                            <option value=700000000>700 triệu</option>
                            <option value=800000000>800 triệu</option>
                            <option value=900000000>900 triệu</option>
                            <option value=1000000000>1 tỷ</option>
                            <option value=2000000000>2 tỷ</option>
                            <option value=3000000000>3 tỷ</option>
                            <option value=4000000000>4 tỷ</option>
                            <option value=5000000000>5 tỷ</option>
                            <option value=6000000000>6 tỷ</option>
                            <option value=7000000000>7 tỷ</option>
                            <option value=8000000000>8 tỷ</option>
                            <option value=9000000000>9 tỷ</option>
                            <option value=10000000000>10 tỷ</option>
                            <option value=">10000000000">> 10 tỷ</option>
                        </select>
                    </div>
                    <div class="col-md-5 col-md-offset-2">
                        <select class="max-price form-control">
                            <option value="">Giá cao nhất</option>
                            <option value="">Giá thấp nhất</option>
                            <option value=0>Thỏa thuận</option>
                            <option value=10000>10 nghìn</option>
                            <option value=100000>100 nghìn</option>
                            <option value=500000>500 nghìn</option>
                            <option value=1000000>1 triệu</option>
                            <option value=5000000>5 triệu</option>
                            <option value=10000000>10 triệu</option>
                            <option value=50000000>50 triệu</option>
                            <option value=100000000>100 triệu</option>
                            <option value=200000000>200 triệu</option>
                            <option value=300000000>300 triệu</option>
                            <option value=400000000>400 triệu</option>
                            <option value=500000000>500 triệu</option>
                            <option value=600000000>600 triệu</option>
                            <option value=700000000>700 triệu</option>
                            <option value=800000000>800 triệu</option>
                            <option value=900000000>900 triệu</option>
                            <option value=1000000000>1 tỷ</option>
                            <option value=2000000000>2 tỷ</option>
                            <option value=3000000000>3 tỷ</option>
                            <option value=4000000000>4 tỷ</option>
                            <option value=5000000000>5 tỷ</option>
                            <option value=6000000000>6 tỷ</option>
                            <option value=7000000000>7 tỷ</option>
                            <option value=8000000000>8 tỷ</option>
                            <option value=9000000000>9 tỷ</option>
                            <option value=10000000000>10 tỷ</option>
                            <option value=">10000000000">> 10 tỷ</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <select class="form-control">
                        <option value="">--Chọn hướng nhà--</option>
                        @foreach($trends as $trend)
                            <option value="{{$trend->id}}">{{$trend->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <select class="form-control">
                        <option value="">--Chọn số phòng ngủ--</option>
                        <option value=0>1</option>
                        <option value=1>2</option>
                        <option value=2>3</option>
                        <option value=3>4</option>
                        <option value=4>5</option>
                        <option value=">5">> 5</option>
                    </select>
                </div>
                <div class="row">
                    <select class="form-control">
                        <option value="">--Chọn số toilet--</option>
                        <option value=0>1</option>
                        <option value=1>2</option>
                        <option value=">2">> 2</option>
                    </select>
                </div>
                <div class="row">
                    <select class="form-control">
                        <option value="">--Chọn dự án--</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <strong><a id="advancedSearchButton" class="pull-left" href="javascript:void(0)">Tìm kiếm nâng cao &darr;</a></strong>
                <button type="button" class="pull-right search-button">Tìm kiếm</button>        
            </div>
        </form>
    </div>
    <div class="cities">
        <div class="row">
            <img class="img-responsive" src="images/diadiem.jpg"/>
        </div>
        @foreach($cities as $city)
        <div class="city">
            <a href="#">
                {{$city->name}}
                <span class="pull-right">1000</span>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- end left-bar -->