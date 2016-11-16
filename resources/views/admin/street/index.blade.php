@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đường/Phố
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
                        <th>Tên đường/phố</th>
                        <th>Quận/Huyện</th>
                        <th>Tỉnh/Thành Phố</th>
                        <th>Tọa độ địa lý</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($streets as $street)
                    <tr class="odd gradeX" align="center">
                        <td>{{$street->id}}</td>
                        <td>{{$street->name}}</td>
                        <td>{{$street->district->name}}</td>
                        <td>{{$street->district->city->name}}</td>
                        <td>{{$street->location}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/duong-pho/xoa/{{$street->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/duong-pho/sua/{{$street->id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$cities->links()}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection