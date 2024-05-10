@extends('admin.layout.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Categories
                {{-- <small class="text-muted">Categores List</small> --}}
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button id="btn-add-category-popup" class="btn btn-primary btn-round hidden-sm-down float-right m-l-10" type="button">
                 Add Category
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
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($categories as $k=>$v)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$v['name']}}</td>
                                    <td>{{$v['slug']}}</td>
                                    <td>
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" data-name="{{$v['name']}}" data-slug="{{$v['slug']}}" data-logo="{{$v['logo']}}" class="text-warning btn-edit">Edit</a>  
                                        | 
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" class="text-danger btn-delete">Delete</a>
                                        |
                                        <a href="{{url('category/'.$v['slug'])}}" class="text-success" target="_blank">View</a>
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
{{-- Add Category Modal --}}
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="addCategoryModalLabel">Add New Category</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input name="file" id="file" type="file" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter Category Name">
                        </div>
                        <div class="form-group">
                            <label for="category_slug">Category Slug</label>
                            <input disabled type="text" id="category_slug" name="category_slug" class="form-control" placeholder="Enter Category Slug">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-add-category" class="btn btn-default btn-round waves-effect">SAVE</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

{{-- Edit Category Modal --}}
<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="editCategoryModalLabel">Edit Category</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="edit_category_file">
                                <img src="#" alt="" class="img img-fluid w-100" id="logo">
                            </label>
                            <input type="file" name="edit_category_file" id="edit_category_file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="edit_category_name">Category Name</label>
                            <input type="text" id="edit_category_name" name="edit_category_name" class="form-control" placeholder="Enter Category Name">
                        </div>
                        <div class="form-group">
                            <label for="edit_category_slug">Category Slug</label>
                            <input disabled type="text" id="edit_category_slug" name="edit_category_slug" class="form-control" placeholder="Enter Category Slug">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-update-category" class="btn btn-default btn-round waves-effect">SAVE</button>
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
        var cat_id = $(this).data("id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function () {
            $.ajax({
                url:"{{route('admin.categories.delete')}}",
                type:"POST",
                data:{
                    id:cat_id
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

    $("#btn-add-category-popup").click(function(){
        $("#category_name,#category_slug,#file").val("");
        $("#addCategoryModal").modal("show");

        $("#category_name").on("keyup",function(){
            var cat_str = $(this).val();
            $.ajax({
                url:"{{route('admin.checkslug')}}",
                type:"POST",
                data:{
                    type:"category",
                    str:cat_str
                },
                success: function(result) {
                    $("#category_slug").val(result.slug)
                    if(!result.success){
                        toastr.warning(result.msg)
                    }
                }
            });
        })

        $("#btn-add-category").click(function(){
            var category = $("#category_name").val();
            var slug = $("#category_slug").val();
            
            var fd = new FormData();
            fd.append("category_name",category);
            fd.append("category_slug",slug);
            var img = $("#file")[0].files;
            if(img.length > 0 ){
                fd.append("image",img[0]);
            }
          
            $.ajax({
                url:  "{{route('admin.categories.create')}}",
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
        var name = $(this).data("name");
        var slug = $(this).data("slug");
        var logo = $(this).data("logo");

        $("#edit_category_name").val(name);
        $("#edit_category_slug").val(slug);
        $("#logo").attr("src","{{asset('uploads/category')}}/"+logo);

        $("#editCategoryModal").modal("show");

        $("#edit_category_name").on("keyup",function(){
            var cat_str = $(this).val();
            $.ajax({
                url:"{{route('admin.checkslug')}}",
                type:"POST",
                data:{
                    type:"category",
                    str:cat_str
                },
                success: function(result) {
                    $("#edit_category_slug").val(result.slug)
                    if(!result.success){
                        toastr.warning(result.msg)
                    }
                }
            });
        })

        $("#btn-update-category").click(function(){
            var category = $("#edit_category_name").val();
            var cat_slug = $("#edit_category_slug").val();
            var fd = new FormData();
            fd.append("id",id);
            fd.append("category_name",category);
            fd.append("category_slug",cat_slug);
            var img = $("#edit_category_file")[0].files;
            if(img.length > 0 ){
                fd.append("image",img[0]);
            }

            $.ajax({
                url:  "{{route('admin.categories.update')}}",
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
})
</script>
@endpush