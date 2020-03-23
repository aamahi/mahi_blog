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

                </section>

            </div>
        </div>
        <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            All Post
                            <span class="tools pull-right">
                                  <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                        </header>
                        <div class="card-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>Photo </th>
                                        <th>Title</th>
                                        <th>Category </th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td><img width="85"  src="{{asset('admin/post/'.$post->photo)}}" alt=""></td>
                                            <td>{{$post->title}} </td>
                                            <td>{{$post->category->category_name}} </td>
                                            <td>{{date('jS M , Y',strtotime($post->created_at))}} </td>
                                            <td>
                                                <a href="" class="btn btn-md btn-info"> <i class="fa fa-eye"></i> </a>
                                                <a href="" class="btn btn-md btn-success"> <i class="fa fa-pencil-square-o"></i> </a>
                                                <a href="" class="btn btn-md btn-danger"> <i class="fa fa-trash-o"></i> </a>
                                            </td>
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
