@extends('admin.layout.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.block.danger')
                <form action="{!! route('admin.posts.store') !!}" method="POST" enctype="multipart/form-data" />
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id" id="category">
                            <?php category_parent($categories,0,"--",0); ?>
                        </select>
                        @if($errors->has('category_id'))
                            <p style="color:red">{{ $errors->first('category_id') }}</p>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" placeholder="Nhập Tên Tin Tức" name="title" value="{!! old('title') !!}" />
                        @if($errors->has('title'))
                            <p style="color:red">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" rows="3" required="required">{!! old('content') !!}</textarea>
                        @if($errors->has('content'))
                            <p style="color:red">{{ $errors->first('content') }}</p>
                        @endif
                        <script type="text/javascript">ckeditor("content")</script>
                    </div>
                    <div class="form-group">
                        <label>Thumb Image</label>
                        <input type="file" name="thumb_img" value="{!! old('thumb_img') !!}" />
                        @if($errors->has('thumb_img'))
                            <p style="color:red">{{ $errors->first('thumb_img') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Nổi Bật</label>
                        <label class="radio-inline">
                            <input name="highlight" value="1" checked="" type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input name="highlight" value="2" type="radio">Không
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                    </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection
        @section('script')
        <script type="text/javascript">
            $(document).ready(function (){
                $("#TheLoai").change(function(){
                var idTheLoai = $(this).val();
                $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
                    $("#LoaiTin").html(data);
                    });
                });
            });
        </script>
        @endsection