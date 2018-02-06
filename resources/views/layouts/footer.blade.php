
<!-- JS Scripts -->
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}></script>
<script src="{{asset('js/jquery.mousewheel.js')}}></script>
<script src="{{asset('js/perfect-scrollbar.js')}}></script>
<script src="{{asset('js/jquery.matchHeight.js')}}></script>
<script src="{{asset('js/svgxuse.js')}}></script>
<script src="{{asset('js/imagesloaded.pkgd.js')}}></script>
<script src="{{asset('js/Headroom.js')}}></script>
<script src="{{asset('js/velocity.js')}}></script>
<script src="{{asset('js/ScrollMagic.js')}}></script>
<script src="{{asset('js/jquery.waypoints.js')}}></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/material.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/smooth-scroll.js')}}"></script>
<script src="{{asset('js/selectize.js')}}"></script>
<script src="{{asset('js/swiper.jquery.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>
<script src="{{asset('js/daterangepicker.js')}}"></script>
<script src="{{asset('js/simplecalendar.js')}}"></script>
<script src="{{asset('js/fullcalendar.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.js')}}"></script>
<script src="{{asset('js/ajax-pagination.js')}}"></script>
<script src="{{asset('js/Chart.js')}}"></script>
<script src="{{asset('js/chartjs-plugin-deferred.js')}}"></script>
<script src="{{asset('js/circle-progress.js')}}"></script>
<script src="{{asset('js/loader.js')}}"></script>
<script src="{{asset('js/run-chart.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/jquery.gifplayer.js')}}"></script>
<script src="{{asset('js/mediaelement-and-player.js')}}"></script>
<script src="{{asset('js/mediaelement-playlist-plugin.min.js')}}"></script>

<script src="{{asset('js/base-init.js')}}"></script>

<script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@if (session('sendEmailSuccess'))
    <script>swal('{{ session('sendEmailSuccess') }}')</script>
@endif
@if (session('resetPasswordSuccess'))
    <script>swal('{{ session('resetPasswordSuccess') }}')</script>@endif
</body>
</html>