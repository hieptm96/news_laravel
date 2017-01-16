@extends('admin.layout.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @include('admin.block.success')
                <h1 class="page-header">List Categories
                {{-- <small>Danh Sách</small> --}}
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach ($categories as $category)
                    <?php $i = $i + 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $i !!}</td>
                        <td>{!! $category->name !!}</td>
                        <td>{!! $category->slug !!}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('admin.categories.delete', ['id'=>$category->id]) !!}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.categories.edit', ['id'=>$category->id]) !!}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection