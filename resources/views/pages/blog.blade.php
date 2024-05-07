@extends('layout.app')
@section('content')
<section class="content blog-page">
    <div class="container">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Blog Detail
                        {{-- <small>Welcome to Compass</small> --}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    {{-- <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                        <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                        <li class="breadcrumb-item active">Blog Detail</li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card single_post">
                        <div class="body">
                            <h3 class="m-t-0 m-b-5"><a href="javascript:void(0)">{{$blog['title']}}</a></h3>
                            {{-- <ul class="meta">
                                <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                                <li><a href="#"><i class="zmdi zmdi-label col-red"></i>Photography</a></li>
                                <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                            </ul> --}}
                        </div>                    
                        <div class="body">
                            {{-- <div class="img-post m-b-15">
                                <img src="{{asset('uploads/blog/'.$blog['image'])}}" alt="Awesome Image">
                                <div class="social_share">                            
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                </div>
                            </div> --}}
                            <div class="blog-content">
                                {!! $blog['content'] !!}
                            </div>                        
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection

@push('meta')
{!! $blog['meta'] !!}
@endpush

