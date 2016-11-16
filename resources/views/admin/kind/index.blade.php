@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại nhà
                    <small>Danh sách</small>
                </h1>
            </div>
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
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên loại nhà</th>
                        <th>Tên không dấu</th>
                        <th>Thể loại nhà</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kinds as $kind)
                    <tr class="odd gradeX" align="center">
                        <td>{{$kind->id}}</td>
                        <td>{{$kind->name}}</td>
                        <td>{{$kind->slug}}</td>
                        <td>{{$kind->category->name}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loai-nha/xoa/{{$kind->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loai-nha/sua/{{$kind->id}}">Sửa</a></td>
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