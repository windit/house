@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Xã/Phường
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
             @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br/>
                    @endforeach
                </div>
            @endif
            @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Xã/Phường</th>
                        <th>Quận/Huyện</th>
                        <th>Tỉnh/Thành Phố</th>
                        <th>Tọa độ địa lý</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wards as $ward)
                    <tr class="odd gradeX" align="center">
                        <td>{{$ward->id}}</td>
                        <td>{{$ward->name}}</td>
                        <td>{{$ward->district->name}}</td>
                        <td>{{$ward->district->city->name}}</td>
                        <td>{{$ward->location}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/xa-phuong/xoa/{{$ward->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/xa-phuong/sua/{{$ward->id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$wards->links()}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection