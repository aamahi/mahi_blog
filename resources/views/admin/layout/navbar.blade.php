<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{route('admin.home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
{{--            Category--}}
            <li>
                <a href="{{URL('dashboard/category_add')}}">
                    <i class="fa fa-tasks"></i>
                    <span>Category</span>
                </a>
            </li>

{{--            Post--}}

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Post</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Post</a></li>
                    <li><a  href="{{route('write_post')}}">Write Post</a></li>
                </ul>
            </li>

{{--            Example--}}

{{--            <li class="sub-menu">--}}
{{--                <a href="javascript:;" >--}}
{{--                    <i class="fa fa-user"></i>--}}
{{--                    <span>Category</span>--}}
{{--                </a>--}}
{{--                <ul class="sub">--}}
{{--                    <li><a  href="">Add Category</a></li>--}}
{{--                    <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
