@extends('layout.index')
@section('title')
Trang web mua bán nhà nhanh nhất Việt Nam
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
                        <div class="page-content">
                            <h2>Tin rao nhà mới nhất</h2>
                        </div>   
                        <div class="row">
                            <?php 

                                // echo '<pre>';
                                // print_r($image);
                                // echo '</pre>';    
                            ?>
                        </div>
                        @foreach($houses as $house)                               
                        <div class="row">
                            <div class="title">
                                <h3><a href="chi-tiet">{{$house->title}}</a></h3>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="chi-tiet"><img class="img-house img-responsive" src="images/house/{{$house->images->shift()->name}}" /></a> 
                                   <?php
                                        // echo '<pre>';
                                        // print_r($house->images);
                                        // echo '</pre>';
                                        // echo $house->images->shift()['name'];
                                    ?>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <p class="info">
                                            {!!createExcerptAndLink($house->info, 50, '', 'Xem chi tiết')!!}
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="pull-left">
                                            <strong >Loại nhà:</strong>{{$house->kind->name}}
                                        </div>
                                        <div class="pull-right">
                                            <strong >Giá cả:</strong> {{$house->price}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <strong>Địa điểm:</strong> {{$house->address}}
                                    </div>
                                    <div class="row">
                                        <div class="pull-left">
                                            <strong >Số tầng:</strong> {{$house->NumberOfFloors}}
                                        </div>
                                        <div class="pull-right">
                                            <strong >{{$house->area}}</strong> 120 m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pull-left">
                                            <strong >Hướng nhà:</strong> {{$house->trend->name}}
                                        </div>
                                        <div class="pull-right">
                                            <strong >Số phòng ngủ:</strong>{{$house->NumberOfBedrooms}}</sup>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <strong>Ngày hết hạn:</strong> {{$house->expiration_time}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        @endforeach
                        
                        

                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav><!-- end pagination -->
                    </div><!--end .content -->
                </div>
                <div class="col-md-2">
                    @include('layout.ads')
                </div>
            </div>
        </div>      
    </section>
    <!--end section-->
@endsection