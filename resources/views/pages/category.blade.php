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
<title>Save Big with Online Promo Codes - Coupons Percent Off</title>
@endpush