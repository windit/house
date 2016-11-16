@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quận/Huyện
                    <small>Thêm</small>
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
                <form action="admin/quan-huyen/sua/{{$district->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tỉnh/Thành phố</label>
                        <select name="city" class="form-control">
                            <option value="">Chọn tỉnh/thành phố</option>
                            @foreach($cities as $city)
                            <option
                                value="{{$city->id}}"
                                @if($city->id == $district->city_id)
                                    {{"selected = 'selected'"}}
                                @endif
                            >{{$city->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quận/Huyện</label>
                        <input class="form-control" value="{{$district->name}}" name="DistrictName" placeholder="Nhập tên quận/huyện" />
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