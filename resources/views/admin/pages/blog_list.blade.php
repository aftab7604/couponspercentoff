@extends('admin.layout.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Blogs
                {{-- <small class="text-muted">Categores List</small> --}}
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button id="btn-add-blog-popup" class="btn btn-primary btn-round hidden-sm-down float-right m-l-10" type="button">
                Add Blog
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Focus Keyword</th>
                                    <th>Meta</th>
                                    <th>Categories</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Focus Keyword</th>
                                    <th>Meta</th>
                                    <th>Categories</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($blogs as $k=>$v)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td><img src="{{asset("uploads/blog/$v[image]")}}" class="img img-fluid"></td>
                                    <td>{{$v['title']}}</td>
                                    <td>{{$v['slug']}}</td>
                                    <td>{{$v['focus_keyword']}}</td>
                                    <td>{{$v['meta']}}</td>
                                    <td>
                                        @forelse($v['categories'] as $ck=>$cv)
                                        <a href="javascript:void(0)" class="tag badge badge-info">{{$cv['name']}}</a>
                                        @empty
                                        -
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" data-slug="{{$v['slug']}}" class="text-warning btn-edit">Edit</a>  
                                        | 
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" class="text-danger btn-delete">Delete</a>
                                        |
                                        <a href="{{url('blog/'.$v['slug'])}}" class="text-success" target="_blank">View</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">No Record Found</td>
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
{{-- Add Blog Modal --}}
<div class="modal fade" id="addBlogModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="addBlogModalLabel">Add New Blog</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post" id="add" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="blog_slug">Slug</label>
                                <input disabled type="text" id="blog_slug" name="blog_slug" class="form-control" placeholder="Enter Blog Slug">
                            </div>
                           
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input name="file" id="file" type="file" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="blog_title">Title</label>
                                <input type="text" id="blog_title" name="blog_title" class="form-control" placeholder="Enter Blog Title">
                            </div>
                            <div class="form-group">
                                <label for="blog_content">Content</label>
                                <textarea name="blog_content" id="blog_content" class="form-control" placeholder="Content"></textarea>
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
                            <div class="form-group">
                                <label for="blog_focus_keyword">Focus Keyword</label>
                                <input type="text" id="blog_focus_keyword" name="blog_focus_keyword" class="form-control" placeholder="Enter Blog Focus Keyword">
                            </div>
                            <div class="form-group">
                                <label for="blog_meta">Meta Keywords</label>
                                <textarea name="blog_meta" id="blog_meta" class="form-control" placeholder="Meta"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-add-blog" class="btn btn-default btn-round waves-effect">SAVE</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

{{-- Edit Blog Modal --}}
<div class="modal fade" id="editBlogModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="editBlogModalLabel">Edit Blog</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post" id="update" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="edit_file">
                                    <img src="#" alt="" class="img img-fluid w-100" id="image">
                                </label>
                                <input type="file" name="edit_file" id="edit_file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="edit_blog_slug">Slug</label>
                                <input disabled type="text" id="edit_blog_slug" name="edit_blog_slug" class="form-control" placeholder="Enter Blog Slug">
                            </div>
                           
                            <div class="form-group">
                                <label for="edit_blog_title">Title</label>
                                <input type="text" id="edit_blog_title" name="edit_blog_title" class="form-control" placeholder="Enter Blog Title">
                            </div>
                            <div class="form-group">
                                <label for="edit_blog_content">Content</label>
                                <textarea name="edit_blog_content" id="edit_blog_content" class="form-control" placeholder="Content"></textarea>
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
                            <div class="form-group">
                                <label for="edit_blog_focus_keyword">Focus Keyword</label>
                                <input type="text" id="edit_blog_focus_keyword" name="edit_blog_focus_keyword" class="form-control" placeholder="Enter Blog Focus Keyword">
                            </div>
                            <div class="form-group">
                                <label for="edit_blog_meta">Meta Keywords</label>
                                <textarea name="edit_blog_meta" id="edit_blog_meta" class="form-control" placeholder="Meta"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-update-blog" class="btn btn-default btn-round waves-effect">SAVE</button>
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
                url:"{{route('admin.blogs.delete')}}",
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

    $("#btn-add-blog-popup").click(function(){
        $("#blog_slug,#file,#blog_title,#blog_content,#blog_focus_keyword,#blog_meta").val("");
        $("#addBlogModal").modal("show");
        CKEDITOR.replace( 'blog_content' );
        $('#categories').multiSelect({
            enableFiltering:true,
            selectableOptgroup: true 
        });
        $('#categories').multiSelect('deselect_all');
        $('#categories').multiSelect('refresh');

        $("#blog_title").on("keyup",function(){
            var store_str = $(this).val();
            $.ajax({
                url:"{{route('admin.checkslug')}}",
                type:"POST",
                data:{
                    type:"blog",
                    str:store_str
                },
                success: function(result) {
                    $("#blog_slug").val(result.slug)
                    if(!result.success){
                        toastr.warning(result.msg)
                    }
                }
            });
        })

        $("#btn-add-blog").click(function(){
            var post_data = {};
            post_data.slug = $("#blog_slug").val();
            post_data.title = $("#blog_title").val();
            post_data.content = CKEDITOR.instances['blog_content'].getData();
            post_data.focus_keyword = $("#blog_focus_keyword").val();
            post_data.meta = $("#blog_meta").val();
            post_data.category_ids = $('#categories').val();
            
          
            var fd = new FormData();
            fd.append("slug",post_data.slug);
            fd.append("title",post_data.title);
            fd.append("content",post_data.content);
            fd.append("focus_keyword",post_data.focus_keyword);
            fd.append("meta",post_data.meta);
            fd.append("category_ids",post_data.category_ids);

            var img = $("#file")[0].files;
            if(img.length > 0 ){
                fd.append("image",img[0]);
            }
    
            $.ajax({
                url:  "{{route('admin.blogs.create')}}",
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
            url:"{{route('admin.blogs.get.by.id',':id')}}".replace(':id', id),
            type:"get",
            success:function(result){
                if(result.code == 200){ // success
                    var respo = result.data;
                    
                    $("#image").attr("src","{{asset('uploads/blog')}}/"+respo.image);
                    $("#edit_blog_slug").val(respo.slug);
                    $("#edit_blog_title").val(respo.title);
                    $("#edit_blog_content").val(respo.content);
                    $("#edit_blog_focus_keyword").val(respo.focus_keyword);
                    $("#edit_blog_meta").val(respo.meta)

                    var catArr = [];
                    $.each(respo.categories,function(i,e){
                        catArr[i] = e.id;
                    })
                    $("#edit_categories").val(catArr)
                    
                    $('#edit_categories').multiSelect({
                        enableFiltering:true,
                        selectableOptgroup: true 
                    });

                    $("#editBlogModal").modal("show");
                    CKEDITOR.replace( 'edit_blog_content' );
                    $("#edit_blog_title").on("keyup",function(){
                        var str = $(this).val();
                        $.ajax({
                            url:"{{route('admin.checkslug')}}",
                            type:"POST",
                            data:{
                                type:"blog",
                                str:str
                            },
                            success: function(result) {
                                $("#edit_blog_slug").val(result.slug)
                                if(!result.success){
                                    toastr.warning(result.msg)
                                }
                            }
                        });
                    })

                    $("#btn-update-blog").click(function(){
                        var post_data = {};
                        post_data.id =  id;
                        post_data.slug = $("#edit_blog_slug").val();
                        post_data.title = $("#edit_blog_title").val();
                        post_data.content = CKEDITOR.instances['edit_blog_content'].getData();
                        post_data.focus_keyword = $("#edit_blog_focus_keyword").val();
                        post_data.meta = $("#edit_blog_meta").val();
                        post_data.category_ids = $('#edit_categories').val();

                        var fd = new FormData();
                        fd.append("id",post_data.id);
                        fd.append("slug",post_data.slug);
                        fd.append("title",post_data.title);
                        fd.append("content",post_data.content);
                        fd.append("focus_keyword",post_data.focus_keyword);
                        fd.append("meta",post_data.meta);
                        fd.append("category_ids",post_data.category_ids);

                        var img = $("#edit_file")[0].files;
                        if(img.length > 0 ){
                            fd.append("image",img[0]);
                        }
                
                        $.ajax({
                            url:  "{{route('admin.blogs.update')}}",
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
                                    console.log(result.error)
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

    $.fn.modal.Constructor.prototype._enforceFocus = function() {
        var $modalElement = this.$element;
        $(document).on('focusin.modal',function(e) {
            if ($modalElement.length > 0 && $modalElement[0] !== e.target
                && !$modalElement.has(e.target).length
                && $(e.target).parentsUntil('*[role="dialog"]').length === 0) {
                $modalElement.focus();
            }
        });
    };
})
</script>
@endpush
@push('styles')
<style>
.ck.ck-balloon-panel {
    z-index: 1050 !important;
}
</style>
@endpush