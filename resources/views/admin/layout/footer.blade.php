
<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        {{date('Y')}} &copy; Abdullah al Mahi
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/js/dynamic_table_init.js')}}"></script>

<script src="{{asset('admin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="{{asset('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/data-tables/DT_bootstrap.js')}}"></script>

<script src="{{asset('admin/js/owl.carousel.js')}}" ></script>
<script src="{{asset('admin/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('admin/js/respond.min.js')}}" ></script>


<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts5e1f.js')}}?v=2"></script>

<script src="cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!--script for this page-->

<script>

    //owl carousel
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>
</html>
