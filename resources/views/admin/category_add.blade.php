@extends('admin.index')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                       Add Category
                    </header>
                    <div class="card-body">
                        <form action="{{route('admin.category_add')}}" method="post">
                            @csrf
                            <div class="form-row align-items-center">
                                <p>Category Name</p>
                                <div class="col-auto col-sm-4">
                                    <input type="text" class="form-control mb-3" name="category_name" placeholder="Category Name">
                                </div>
                                <p>Category Slug</p>
                                <div class="col-auto col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" class="form-control" name="slug" placeholder="Category Slug">
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-2">Add Category</button>
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
