<script src="{{asset('storage/app/public/frontassests/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('storage/app/public/frontassests/js/bootstrap.min.js')}}"></script>
<script src="{{asset('storage/app/public/frontassests/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('storage/app/public/frontassests/js/jquery-v3.0.4.js')}}"></script>
<script src="{{asset('storage/app/public/frontassests/js/app.js')}}"></script>
<script>
    $('.filters ul li').click(function() {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: true,
        masonry: {
            columnWidth: ".all"
        }
    })
</script>
@yield('script')
