@extends('layout.app')
@section('content')
<section class="content blog-page">
    <div class="container">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="heading-today">{{$store['name']}} Coupons & Promo Codes For {{date('d M, Y')}}</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>{{$store['title']}}</strong></h2>
                        </div>
                        <div class="body">
                            <ul class="comment-reply list-unstyled">
                                @forelse ($store['coupons'] as $k=>$v)
                                <li class="row bg-light p-4 m-3 rounded">
                                    <div class="icon-box col-md-2 col-3">
                                        <img class="img-fluid img-thumbnail" src="{{asset('uploads/store/'.$store['logo'])}}" alt="store">
                                    </div>
                                    <div class="text-box col-md-7 col-5 p-l-0 p-r0">
                                       
                                        <small>{{$store['name']}}</small>
                                        <h5 class="m-b-0">{{$v['name']}}</h5>
                                        {{-- <ul class="list-inline">
                                            <li><a href="javascript:void(0)">Coupon used: 186 times</a></li>
                                            <li><a href="javascript:void(0)">Success rate: 51%</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <button class="btn btn-info btn-block">{{$v['code']}}</button>
                                    </div>
                                </li>    
                                @empty
                                    <h4>No Record Found</h4>
                                @endforelse
                                
                            </ul>         
                            
                            <div class="row p-4 m-3">
                                <div class="col-md-12">
                                    {!!$store['description']!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Coupons And Discount Codes At Our Favorite Stores</strong></h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                @foreach ($stores as $k=>$v)
                                <div class="col-md-2 p-2">
                                    <a href="{{route('home.store',$v['slug'])}}" class="text-black">
                                    <div class="border rounded text-center">
                                        <img src="{{asset('uploads/store/'.$v['logo'])}}" class="img img-fluid d-block" style="width:100%; height:100%;" alt="logo">
                                        <span>{{$v['name']}}</span>
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection