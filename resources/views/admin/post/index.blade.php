@extends('admin.layout.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Posts
                {{-- <small>Danh Sách</small> --}}
                </h1>
                @include('admin.block.success')
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Thumb Img</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Content</th>
                        <th>Highlight</th>
                        <th>Views</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach ($posts as $post)
                    <?php $i = $i + 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $i !!}</td>
                        <td>
                            <img src="resources/upload/posts/{!! $post->thumb_img !!}" alt="" style="width:80px;height:80px ;float:left;" />
                        </td>
                        <td>{!! $post->title !!}</td>
                        <td>{!! $post->slug !!}</td>
                        <?php $text = strip_tags($post->content); ?>
                        <td>{!! (strlen($text) > 200) ? substr($text,0,200).'.....' : $text !!}</td>
                        <td>
                            @if ($post->highlight == 0)
                              {!! 'Không' !!}
                            @else
                              {!! 'Có' !!}
                            @endif

                        </td>
                        <td>{!! $post->view !!}</td>
                        <td>{!! $post->category->name !!}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! route('admin.posts.delete', ['id'=>$post->id]) !!}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.posts.edit', ['id'=>$post->id]) !!}">Edit</a></td>
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