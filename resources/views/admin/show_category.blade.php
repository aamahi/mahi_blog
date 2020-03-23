@extends('admin.index')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            show Catagory Details
                            <span class="tools pull-right">
                                  <a href="javascript:;" class="fa fa-chevron-down"></a>
                            </span>
                        </header>
                        <div class="card-body">
                            Category name : {{$category->category_name}}
                            <br>
{{--                            {{$category->posts}}--}}
                            @foreach($category->posts as $post)
                                Post Title : {{$post->title}}
                                <br>
                             @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
