
<!-- JS Scripts -->
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@if (session('sendEmailSuccess'))
    <script>swal('{{ session('sendEmailSuccess') }}')</script>
@endif
@if (session('resetPasswordSuccess'))
    <script>swal('{{ session('resetPasswordSuccess') }}')</script>
@endif
</body>
</html>