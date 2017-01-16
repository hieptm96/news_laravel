@extends('admin.layout.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{!! $post->title !!}
                </h1>
                @include('admin.block.danger')
                @include('admin.block.errors')
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.block.danger')
                <form action="{!! route('admin.posts.update', ['id'=>$post->id]) !!}" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <?php category_parent($categories,0,"--",$post->category_id); ?>
                        </select>
                        @if($errors->has('category_id'))
                            <p style="color:red">{{ $errors->first('category_id') }}</p>
                        @endif
                    </div>
                   
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" placeholder="Title" value="{!! old('title', isset($post) ? $post->title : null) !!}" />
                    </div>
                   
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" rows="3" required="required">{!! old('content', isset($post) ? $post->content : null) !!}</textarea>
                        @if($errors->has('content'))
                            <p style="color:red">{{ $errors->first('content') }}</p>
                        @endif
                       <script type="text/javascript">ckeditor("content")</script>
                    </div>
                    <div class="form-group">
                        <label>Thumb image</label><br />
                        <img src="resources/upload/posts/{!! $post->thumb_img !!}" style="width:100px;height:100px;margin:20px auto;" />
                        <input type="file" name="thumb_img" />
                    </div>
                    <div class="form-group">
                        <label>Highlight</label>
                        <label class="radio-inline">
                            <input name="highlight" value="1" 
                                @if ($post->highlight == 0)
                                    {!! "checked" !!}
                                @endif
                             type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="highlight" value="2" 
                                @if ($post->highlight == 1)
                                    {!! "checked" !!}
                                @endif
                            type="radio">Có
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Post Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>

        

            <!-- /.container-fluid -->
        </div>
        @endsection