@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hướng nhà
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
                        <th>Hướng nhà</th>
                        <th>Hướng nhà không dấu</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trends as $trend)
                    <tr class="odd gradeX" align="center">
                        <td>{{$trend->id}}</td>
                        <td>{{$trend->name}}</td>
                        <td>{{$trend->slug}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/huong-nha/xoa/{{$trend->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/huong-nha/sua/{{$trend->id}}">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection