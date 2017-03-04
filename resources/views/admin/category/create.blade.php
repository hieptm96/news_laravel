@extends('admin.layout.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể Loại
                <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.block.errors')

                @include('admin.block.success')

                <form action="{!! route('admin.categories.store') !!}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Nhập tên thể loại" />
                    </div>
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select name="parent_id" id="" class="form-control">
                            <?php category_parent($categories); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Add Category</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection