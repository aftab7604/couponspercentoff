@extends('admin.layout.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Pages
                {{-- <small class="text-muted">Categores List</small> --}}
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                {{-- <button id="btn-add-store-popup" class="btn btn-primary btn-round hidden-sm-down float-right m-l-10" type="button">
                Add Page
                </button>       --}}
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
                                    <th>Content</th>
                                    <th>Meta</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Content</th>
                                    <th>Meta</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($pages as $k=>$v)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$v['name']}}</td>
                                    <td>{{$v['slug']}}</td>
                                    <td>{{$v['content']}}</td>
                                    <td>{{$v['meta']}}</td>
                                    <td>
                                        <a href="javascript:void(0)" data-id="{{$v['id']}}" data-name="{{$v['name']}}" data-slug="{{$v['slug']}}" class="text-warning btn-edit">Edit</a>  
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

{{-- Edit Page Modal --}}
<div class="modal fade" id="editPageModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="editPageModalLabel">Edit Page</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="edit_page_content">Content</label>
                            <textarea name="edit_page_content" id="edit_page_content" class="form-control" placeholder="Content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_page_meta">Meta</label>
                            <textarea name="edit_page_meta" id="edit_page_meta" class="form-control" placeholder="Meta"></textarea>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-update-page" class="btn btn-default btn-round waves-effect">SAVE</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
$(document).ready(function(){
    $(".btn-edit").click(function(){
        var id = $(this).data("id");
        $.ajax({
            url:"{{route('admin.pages.get.by.id',':id')}}".replace(':id', id),
            type:"get",
            success:function(result){
                if(result.code == 200){ // success
                    var respo = result.data;
                    $("#edit_page_content").val(respo.content);
                    $("#edit_page_meta").val(respo.meta)

                    $("#editPageModal").modal("show");
                    CKEDITOR.replace( 'edit_page_content' );
                    
                    $("#btn-update-page").click(function(){
                        var post_data = {};
                        post_data.id =  id;
                        post_data.content = CKEDITOR.instances['edit_page_content'].getData();
                        post_data.meta = $("#edit_page_meta").val();

                        $.ajax({
                            url:  "{{route('admin.pages.update')}}",
                            type: 'POST',
                            data:post_data,
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