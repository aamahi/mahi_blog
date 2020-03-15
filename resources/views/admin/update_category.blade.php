@extends('admin.index')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                       Update Category
                    </header>

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

                        <form action="{{URL('dashboard/update_category',$category->id)}}" method="post">
                            @csrf
                            <div class="form-row align-items-center">
                                <p>Category Name</p>
                                <div class="col-auto col-sm-4">
                                    <input type="text" class="form-control mb-3" name="category_name" placeholder="Category Name" value="{{$category->category_name}}">

                                </div>
                                <p>Category Slug</p>
                                <div class="col-auto col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" class="form-control" name="slug" placeholder="Category Slug" value="{{$category->slug}}">

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-2">Update Category</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
        </section>
    </section>
@endsection
