@extends('layout.app')
@section('content')
<section class="content blog-page">
    <div class="container">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{-- <h2 class="heading-today">Today's Top Coupons And Discount Codes</h2> --}}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Today's Top Coupons And Discount Codes</strong> - {{count($coupons)}}</h2>
                        </div>
                        <div class="body">
                            <ul class="comment-reply list-unstyled">
                                @forelse ($coupons as $k=>$v)
                                <li class="row bg-light p-4 m-3 rounded">
                                    <div class="icon-box col-md-2 col-3">
                                        <img class="img-fluid img-thumbnail" src="{{asset('uploads/store/'.$v['store']['logo'])}}" alt="store">
                                    </div>
                                    <div class="text-box col-md-7 col-5 p-l-0 p-r0">
                                       
                                        <small>{{$v['store']['name']}}</small>
                                        <h5 class="m-b-0">{{$v['name']}}</h5>
                                        {{-- <ul class="list-inline">
                                            <li><a href="javascript:void(0)">Coupon used: 186 times</a></li>
                                            <li><a href="javascript:void(0)">Success rate: 51%</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <a href="{{url('store/'.$v['store']['slug'])}}?c={{$v['id']}}" class="btn btn-info btn-block coupon">{{$v['code']}}</a>
                                    </div>
                                </li>    
                                @empty
                                    <h4>No Record Found</h4>
                                @endforelse
                                
                            </ul>                                        
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
                                    <div class="border rounded text-center embed-responsive embed-responsive-1by1 ">
                                        <div class="embed-responsive-item store-div">
                                            <img src="{{asset('uploads/store/'.$v['logo'])}}" class="img img-fluid d-block" alt="logo">
                                            <br>
                                            <span>{{$v['name']}}</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                                                                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Latest Articles</strong></h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                @foreach ($blogs as $k=>$v)
                                <div class="col-md-4 p-2 blog-div">
                                    <a href="{{route('home.blog',$v['slug'])}}" class="text-black">
                                    <div class="border rounded text-center embed-responsive embed-responsive-1by1 ">
                                        <div class="embed-responsive-item">
                                            <img src="{{asset('uploads/blog/'.$v['image'])}}" class="img img-fluid d-block" alt="logo">
                                        </div>
                                    </div>
                                    <p>{{$v['title']}}</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                                                                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Today's Top Categories</strong></h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach ($categories as $k=>$v)
                                    <a href="{{route('home.category',$v['slug'])}}" class="tag badge badge-warning">{{$v['name']}}</a>
                                    @endforeach
                                </div>
                                
                            </div>
                                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection


@push('styles')
<style>
    .store-div img{
        height:70%;
    }
    .store-div span{
        font-weight: bold;
    }
    .blog-div a div img{
        height: 100%;
    }
    .blog-div a p{
        
        font-weight: bold;
        font-size: 15px;
        line-height: 22px;
        font-family: 'Inter', sans-serif !important;
    }
   
</style>
@endpush

@push('meta')
<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
<meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
@endpush
