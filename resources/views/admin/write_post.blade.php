@extends('admin.index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <section class="card">
                        <header class="card-header head-border text-center">
                           Write Post
                        </header>
                        <form action="{{route('write_post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif

{{--                                <div class="summernote">Write your post</div>--}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Post Title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="category" class="col-sm-2 col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" id="category" class="form-control">
                                            <option selected disabled>Select Category</option>
                                            @foreach($category as $category_id)
                                                @if($category_id->status==1)
                                                <option value="{{$category_id->id}}">{{$category_id->category_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Post Detailse</label>
                                    <div class="col-sm-10">
                                        <textarea class="summernote" name="details" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Photo Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label"></label>
                                    <div class="col-sm-3">
                                        <input type="submit" class="btn btn-md btn-success btn-block" value="submit">
                                    </div>
                                    <label class="col-sm-7 col-sm-7 control-label"></label>
                                </div>
                            </div>
                        </form>

                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
