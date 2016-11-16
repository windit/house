@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dự án
                    <small>Sửa</small>
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
                <form action="admin/du-an/sua/{{$project->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tỉnh/Thành phố</label>
                        <select name="city" id="city" class="form-control">
                            <option disabled selected value="">Chọn tỉnh/thành phố</option>
                            @foreach($cities as $city)
                                <option
                                    @if($project->district->city->name == $city->name)
                                        {{"selected = 'selected'"}}
                                    @endif
                                     value="{{$city->id}}"
                                    >
                                    {{$city->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quận/Huyện</label>
                        <select name="district" id="district" class="form-control">
                                        
                        </select>
                    </div>
                    <input type="hidden" name="ds" id="ds" value="{{$project->district->id}}" /> 
                    <div class="form-group">
                        <label>Dự án</label>
                        <input class="form-control" value="{{$project->name}}" name="projectName" placeholder="Nhập tên dự án" />
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

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#city').change(function(){
                var city_id = $(this).val();
                $.get('ajax/'+city_id, function(data){
                    $('#district').html(data);
                });
            });
            var city_id = $('#city').val();
            var district_id = $('#ds').val();
            $.get('ajax/'+city_id+'/'+district_id, function(data){
                $('#district').html(data);
                // $('#distric').html(data);
            });
        });
    </script>
@endsection