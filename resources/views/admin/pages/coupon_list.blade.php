@extends('admin.layout.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Coupons
                {{-- <small class="text-muted">Coupon List</small> --}}
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button id="btn-add-coupon-popup" class="btn btn-primary btn-round hidden-sm-down float-right m-l-10" type="button">
                 Add Coupon
                </button>      
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Store</th>
                                    <th>Coupon</th>
                                    <th>Code</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Store</th>
                                    <th>Coupon</th>
                                    <th>Code</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($coupons as $k=>$v)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$v['store']['name']}}</td>
                                    <td>{{$v['name']}}</td>
                                    <td>{{$v['code']}}</td>
                                    <td>
                                        @forelse($v['categories'] as $ck=>$cv)
                                        <a href="javascript:void(0)" class="tag badge badge-info">{{$cv['name']}}</a>
                                        @empty
                                        -
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" data-name="{{$v['name']}}" data-code="{{$v['code']}}" class="text-warning btn-edit">Edit</a>  
                                        | 
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" class="text-danger btn-delete">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Add Coupon Modal --}}
<div class="modal fade" id="addCouponModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="addCouponModalLabel">Add New Coupon</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                       
                        <label for="store_id">Store</label>
                        <select class="form-control show-tick z-index" data-live-search="true" id="store_id">
                            <option value="">Select Store</option>
                            @foreach ($stores as $k=>$v)
                            <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                        </select>

                        
                        <div class="form-group">
                            <label for="coupon_name">Coupon Name</label>
                            <input type="text" id="coupon_name" name="coupon_name" class="form-control" placeholder="Enter Coupon Name">
                        </div>
                        <div class="form-group">
                            <label for="coupon_code">Coupon Code</label>
                            <input type="text" id="coupon_code" name="coupon_code" class="form-control" placeholder="Enter Coupon Code">
                        </div>
                        <div class="form-group">
                            <label for="categories">Categories</label>
                            <select id="categories" name="categories" class="ms" multiple="multiple">
                                <optgroup label="All">
                                @foreach ($categories as $k=>$v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-add-coupon" class="btn btn-default btn-round waves-effect">SAVE</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

{{-- Edit Coupon Modal --}}
<div class="modal fade" id="editCouponModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="editCouponModalLabel">Edit Coupon</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="edit_store_id">Store</label>
                        <select class="form-control show-tick z-index" data-live-search="true" id="edit_store_id">
                            <option value="">Select Store</option>
                            @foreach ($stores as $k=>$v)
                            <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                        </select>

                        
                        <div class="form-group">
                            <label for="edit_coupon_name">Coupon Name</label>
                            <input type="text" id="edit_coupon_name" name="edit_coupon_name" class="form-control" placeholder="Enter Coupon Name">
                        </div>
                        <div class="form-group">
                            <label for="edit_coupon_code">Coupon Code</label>
                            <input type="text" id="edit_coupon_code" name="edit_coupon_code" class="form-control" placeholder="Enter Coupon Code">
                        </div>
                        <div class="form-group">
                            <label for="edit_categories">Categories</label>
                            <select id="edit_categories" name="edit_categories" class="ms" multiple="multiple">
                                <optgroup label="All">
                                @foreach ($categories as $k=>$v)
                                <option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-update-coupon" class="btn btn-default btn-round waves-effect">SAVE</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
$(document).ready(function(){
    $(document).on("click",".btn-delete",function(){
        var id = $(this).data("id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function () {
            $.ajax({
                url:"{{route('admin.coupons.delete')}}",
                type:"POST",
                data:{
                    id:id
                },
                success:function(response){
                    if(response.success){
                        toastr.success(response.msg)
                        setTimeout(function () {
                            window.location.reload(true)
                        }, 2000);
                    }else{
                        toastr.error(response.error)
                        setTimeout(function () {
                            window.location.reload(true)
                        }, 2000);
                    }
                }
            })
        });
        
    });

    $("#btn-add-coupon-popup").click(function(){
        $("#store_id,#coupon_name,#coupon_code").val("");
        $("#store_id").selectpicker('refresh');
        $('#categories').multiSelect({
            enableFiltering:true,
            selectableOptgroup: true 
        });
        $('#categories').multiSelect('deselect_all');
        $('#categories').multiSelect('refresh');


        $("#addCouponModal").modal("show");

        $("#btn-add-coupon").click(function(){
            var post_data = {};
            post_data.name = $('#coupon_name').val();
            post_data.code = $('#coupon_code').val();
            post_data.store_id = $('#store_id').val();
            post_data.category_ids = $('#categories').val();
       
            $.ajax({
                url:  "{{route('admin.coupons.create')}}",
                type: 'POST',
                data:post_data,
                success: function(result){
                    if(result.code == 200){ // success
                        toastr.success(result.msg);
                        setTimeout(() => {
                            window.location.reload(true);
                        }, 2000);
                    }else if(result.code == 202){ // form erros
                        $.each(result.errors,function(i,e){
                            $.each(e,function(index,error){
                                toastr.error(error)
                            })
                        })
                    }else if(result.code == 201){ // toast erros
                        toastr.error(result.error)
                    }else{ //  unknow code
                        toastr.error("Unknown Code");
                    }
                }
            });
        })
    });

    $(".btn-edit").click(function(){
        var id = $(this).data("id");
        $.ajax({
            url:"{{route('admin.coupons.get.by.id',':id')}}".replace(':id', id),
            type:"get",
            success:function(result){
                if(result.code == 200){ // success
                    var respo = result.data;
                    $("#edit_store_id").val(respo.store_id)
                    $("#edit_coupon_name").val(respo.name)
                    $("#edit_coupon_code").val(respo.code)
                    $("#edit_store_id").selectpicker('refresh');
                    var catArr = [];
                    $.each(respo.categories,function(i,e){
                        catArr[i] = e.id;
                    })
                    $("#edit_categories").val(catArr)
                    
                    $('#edit_categories').multiSelect({
                        enableFiltering:true,
                        selectableOptgroup: true 
                    });
                    $("#editCouponModal").modal("show");
                    $("#btn-update-coupon").click(function(){
                        var post_data = {};
                        post_data.id =  id;
                        post_data.name = $("#edit_coupon_name").val();
                        post_data.code = $("#edit_coupon_code").val();
                        post_data.store_id = $("#edit_store_id").val();
                        post_data.category_ids = $("#edit_categories").val();

                        
                        $.ajax({
                            url:  "{{route('admin.coupons.update')}}",
                            type: 'POST',
                            data:post_data,
                            success: function(result){
                                if(result.code == 200){ // success
                                    toastr.success(result.msg);
                                    setTimeout(() => {
                                        window.location.reload(true);
                                    }, 2000);
                                }else if(result.code == 202){ // form erros
                                    $.each(result.errors,function(i,e){
                                        $.each(e,function(index,error){
                                            toastr.error(error)
                                        })
                                    })
                                }else if(result.code == 201){ // toast erros
                                    toastr.error(result.error)
                                }else{ //  unknow code
                                    toastr.error("Unknown Code");
                                }
                            }
                        });
                    })
                    
                }else if(result.code == 202){ // form erros
                    $.each(result.errors,function(i,e){
                        $.each(e,function(index,error){
                            toastr.error(error)
                        })
                    })
                }else if(result.code == 201){ // toast erros
                    toastr.error(result.error)
                }else{ //  unknow code
                    toastr.error("Unknown Code");
                }
            }
        });
    });
})

</script>
@endpush