@extends('admin.layout.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể Loại
                <small>{!! $category['name'] !!}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.block.errors')
                @include('admin.block.success')
                <form action="{!! route('admin.categories.update', ['id'=>$category->id]) !!}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Nhập Tên Thể Loại" value="{!!  old('name', isset($category) ? $category->name : null) !!}" />
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input class="form-control" name="slug" placeholder="Nhập Tên Thể Loại" value="{!!  old('slug', isset($category) ? $category->slug : null) !!}" />
                    </div>
                    <div class="form-group">
                        <label>Parent category</label>
                        <select class="form-control" name="parent_id" placeholder="Nhập Tên Thể Loại">
                            <?php category_parent($categories,0,"--",$category->parent_id); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection