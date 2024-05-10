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
                                        <a href="{{url('store/'.$store['slug'])}}?c={{$v['id']}}" class="btn btn-info btn-block coupon">{{$v['code']}}</a>
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
{{-- Copy Coupon Modal --}}
<div class="modal fade" id="copyCouponModal" tabindex="-1" aria-labelledby="copyCouponModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="copyCouponModalLabel">&nbsp;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>{{$copy_coupon['name']}}</h5>
                            <p>Copy & Paste this code at checkout to avail Coupon Code</p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <input type="text" value="{{$copy_coupon['code']}}" name="code" id="code" readonly class="form-control" placeholder="Coupon Code" >
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <button type="button" id="btn-copy-code" class="btn btn-raised btn-primary btn-round waves-effect m-l-20">COPY</button>          
                        </div>
                        
                        
                        <div class="col-md-12">
                            <p>Go to {{$store['name']}} and paste the code at checkout.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>

@endsection

@push('meta')
{!! $store['meta'] !!}
@endpush

@push('styles')
<style>
    .store-div img{
        height:70%;
    }
    .store-div span{
        font-weight: bold;
    }
</style>
    
@endpush
@push("script")
@if(isset($_GET['c']) && !empty($_GET['c']))
<script>
$("#copyCouponModal").modal("show");
</script>
@endif
<script>
$(document).ready(function() {
    $('#btn-copy-code').click(function() {
        var btn = $(this);
        var text = $('#code').val();
        // var tempInput = $('<input>');
        // $('body').append(tempInput);
        // tempInput.val(text).select();
        // document.execCommand('copy');
        navigator.clipboard.writeText(text);
        // tempInput.remove();
        btn.html("Copied");
        setTimeout(function (){
            btn.html("COPY");
        }, 2000)
    });
});
</script>
@endpush
