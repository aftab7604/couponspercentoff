@extends('layout.app')
@section('content')
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>{{$page['name']}}</h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                {{-- <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Sample Pages</a></li>
                    <li class="breadcrumb-item active">Stater Page</li>
                </ul>                 --}}
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        {!! $page['content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('meta')
{!! $page['meta'] !!}
@endpush
