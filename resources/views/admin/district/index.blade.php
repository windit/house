@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tỉnh/Thành phố
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
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Quận/Huyện</th>
                        <th>Tọa độ địa lý</th>
                        <th>Tỉnh/Thành phố</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($districts as $district)
                    <tr class="odd gradeX" align="center">
                        <td>{{$district->id}}</td>
                        <td>{{$district->name}}</td>
                        <td>{{$district->location}}</td>
                        <td>{{$district->city->name}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/quan-huyen/xoa/{{$district->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/quan-huyen/sua/{{$district->id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$districts->links()}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection