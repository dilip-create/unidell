
    <script src="{{ url('') }}/public/assets/backend/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src="{{ url('') }}/public/assets/backend/js/pages/dashboard/dashboard3.js"></script>
    <!-- Knob Js -->
    <script src="{{ url('') }}/public/assets/backend/js/pages/todo/todo.js"></script>
    <script src="{{ url('') }}/public/assets/js/form-validation.js"></script>
    {{-- For Select Dropdopwn Start--}}
    <script src="{{ url('') }}/public/assets/backend/js/form.min.js"></script>
    <script src="{{ url('') }}/public/assets/backend/js/bundles//multiselect/js/jquery.multi-select.js"></script>
    <script src="{{ url('') }}/public/assets/backend/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    <!-- Custom Js -->
    <script src="{{ url('') }}/public/assets/backend/js/admin.js"></script>
    <script src="{{ url('') }}/public/assets/backend/js/pages/forms/advanced-form-elements.js"></script>
    {{-- For Select Dropdopwn --}}
    {{-- sweetalert js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script>
</body>

</html>