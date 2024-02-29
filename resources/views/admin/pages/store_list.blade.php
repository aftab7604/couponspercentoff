@extends('admin.layout.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Stores
                {{-- <small class="text-muted">Categores List</small> --}}
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button id="btn-add-store-popup" class="btn btn-primary btn-round hidden-sm-down float-right m-l-10" type="button">
                Add Store
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
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Meta</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Meta</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($stores as $k=>$v)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td><img src="{{asset("uploads/store/$v[logo]")}}" class="img img-fluid"></td>
                                    <td>{{$v['name']}}</td>
                                    <td>{{$v['slug']}}</td>
                                    <td>{{$v['title']}}</td>
                                    <td>{{$v['description']}}</td>
                                    <td>{{$v['meta']}}</td>
                                    <td>
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" data-name="{{$v['name']}}" data-slug="{{$v['slug']}}" class="text-warning btn-edit">Edit</a>  
                                        | 
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" class="text-danger btn-delete">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No Record Found</td>
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
{{-- Add Store Modal --}}
<div class="modal fade" id="addStoreModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="addStoreModalLabel">Add New Store</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post" id="add" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="store_slug">Slug</label>
                                <input disabled type="text" id="store_slug" name="store_slug" class="form-control" placeholder="Enter Store Slug">
                            </div>
                           
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input name="file" id="file" type="file" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="store_name">Name</label>
                                <input type="text" id="store_name" name="store_name" class="form-control" placeholder="Enter Store Name">
                            </div>
                            <div class="form-group">
                                <label for="store_title">Title</label>
                                <input type="text" id="store_title" name="store_title" class="form-control" placeholder="Enter Store Title">
                            </div>
                            <div class="form-group">
                                <label for="store_description">Description</label>
                                <textarea name="store_description" id="store_description" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="store_meta">Meta Keywords</label>
                                <textarea name="store_meta" id="store_meta" class="form-control" placeholder="Meta Keywords"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-add-store" class="btn btn-default btn-round waves-effect">SAVE</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

{{-- Edit Store Modal --}}
<div class="modal fade" id="editStoreModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="editStoreModalLabel">Edit Store</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label for="edit_store_file">
                                <img src="#" alt="" class="img img-fluid w-100" id="logo">
                            </label>
                            <input type="file" name="edit_store_file" id="edit_store_file" class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <label for="edit_store_slug">Slug</label>
                            <input disabled type="text" id="edit_store_slug" name="edit_store_slug" class="form-control" placeholder="Enter Store Slug">
                        </div>
                        <div class="form-group">
                            <label for="edit_store_name">Name</label>
                            <input type="text" id="edit_store_name" name="edit_store_name" class="form-control" placeholder="Enter Store Name">
                        </div>
                        <div class="form-group">
                            <label for="edit_store_title">Title</label>
                            <input type="text" id="edit_store_title" name="edit_store_title" class="form-control" placeholder="Enter Store Title">
                        </div>
                        <div class="form-group">
                            <label for="edit_store_description">Description</label>
                            <textarea name="edit_store_description" id="edit_store_description" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_store_meta">Meta Keywords</label>
                            <textarea name="edit_store_meta" id="edit_store_meta" class="form-control" placeholder="Meta Keywords"></textarea>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-update-store" class="btn btn-default btn-round waves-effect">SAVE</button>
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
        var store_id = $(this).data("id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function () {
            $.ajax({
                url:"{{route('admin.stores.delete')}}",
                type:"POST",
                data:{
                    id:store_id
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

    $("#btn-add-store-popup").click(function(){
        $("#store_name,#store_slug,#store_title,#store_description,#store_meta,#file").val("");
        $("#addStoreModal").modal("show");
        CKEDITOR.replace( 'store_description' );
        $("#store_name").on("keyup",function(){
            var store_str = $(this).val();
            $.ajax({
                url:"{{route('admin.checkslug')}}",
                type:"POST",
                data:{
                    type:"store",
                    str:store_str
                },
                success: function(result) {
                    $("#store_slug").val(result.slug)
                    if(!result.success){
                        toastr.warning(result.msg)
                    }
                }
            });
        })

        $("#btn-add-store").click(function(){
            var post_data = {};
            post_data.slug = $("#store_slug").val();
            post_data.name = $("#store_name").val();
            post_data.title = $("#store_title").val();
            post_data.description = $("#store_description").val();
            post_data.meta = $("#estore_meta").val();

            var fd = new FormData();
            fd.append("slug",post_data.slug);
            fd.append("name",post_data.name);
            fd.append("title",post_data.title);
            fd.append("description",post_data.description);
            fd.append("meta",post_data.meta);

            var img = $("#file")[0].files;
            if(img.length > 0 ){
                fd.append("image",img[0]);
            }
    
            $.ajax({
                url:  "{{route('admin.stores.create')}}",
                type: 'POST',
                data:fd,
                contentType:false,
                processData:false,
                dataType:"json",
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
            url:"{{route('admin.stores.get.by.id',':id')}}".replace(':id', id),
            type:"get",
            success:function(result){
                if(result.code == 200){ // success
                    var respo = result.data;
                    $("#logo").attr("src","{{asset('uploads/store')}}/"+respo.logo);
                    $("#edit_store_name").val(respo.name);
                    $("#edit_store_slug").val(respo.slug);
                    $("#edit_store_title").val(respo.title);
                    $("#edit_store_description").val(respo.description);
                    $("#edit_store_meta").val(respo.meta)

                    $("#editStoreModal").modal("show");
                    CKEDITOR.replace( 'edit_store_description' );
                    $("#edit_store_name").on("keyup",function(){
                        var store_str = $(this).val();
                        $.ajax({
                            url:"{{route('admin.checkslug')}}",
                            type:"POST",
                            data:{
                                type:"store",
                                str:store_str
                            },
                            success: function(result) {
                                $("#edit_store_slug").val(result.slug)
                                if(!result.success){
                                    toastr.warning(result.msg)
                                }
                            }
                        });
                    })

                    $("#btn-update-store").click(function(){
                        var post_data = {};
                        post_data.id =  id;
                        post_data.slug = $("#edit_store_slug").val();
                        post_data.name = $("#edit_store_name").val();
                        post_data.title = $("#edit_store_title").val();
                        post_data.description = $("#edit_store_description").val();
                        post_data.meta = $("#edit_store_meta").val();

                        var fd = new FormData();
                        fd.append("id",post_data.id);
                        fd.append("slug",post_data.slug);
                        fd.append("name",post_data.name);
                        fd.append("title",post_data.title);
                        fd.append("description",post_data.description);
                        fd.append("meta",post_data.meta);

                        var img = $("#edit_store_file")[0].files;
                        if(img.length > 0 ){
                            fd.append("image",img[0]);
                        }
                
                        $.ajax({
                            url:  "{{route('admin.stores.update')}}",
                            type: 'POST',
                            data:fd,
                            contentType:false,
                            processData:false,
                            dataType:"json",
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
    })
})
</script>
@endpush