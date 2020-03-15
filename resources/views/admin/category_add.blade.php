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

                        <form action="{{URL('dashboard/category_add')}}" method="post">
                            @csrf
                            <div class="form-row align-items-center">
                                <p>Category Name</p>
                                <div class="col-auto col-sm-4">
                                    <input type="text" class="form-control mb-3" name="category_name" placeholder="Category Name" value="{{old('category_name')}}">

                                </div>
                                <p>Category Slug</p>
                                <div class="col-auto col-sm-4">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" class="form-control" name="slug" placeholder="Category Slug" value="{{old('slug')}}">

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
        <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            All Category
                            <span class="tools pull-right">
                                  <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                        </header>
                        <div class="card-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>ID </th>
                                        <th>Category Name</th>
                                        <th>Slug </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_category as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            @if(($category->status)!=1)
                                                <a class="btn btn-sm btn-warning" href="">Deactive</a>
                                             @else
                                                <a class="btn btn-sm btn-success" href="">Active</a>
                                             @endif
                                        </td>
                                        <td>{{$category->status}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
