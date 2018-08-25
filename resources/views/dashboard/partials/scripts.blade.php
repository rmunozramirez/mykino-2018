
<script src="{{ asset('js/admin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/admin/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/admin/pace.min.js') }}"></script>
<script src="{{ asset('js/admin/inspinia.js') }}"></script>
<script src="{{ asset('js/admin/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/admin/summernote.js') }}"></script>
<script src="{{ asset('js/admin/toastr.min.js') }}"></script>
<script src="{{ asset('js/admin/datatables.min.js') }}"></script>
    <script>
        //toastr

        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-center",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

        @if(Session::has('info'))

        toastr.info("{{Session::get('info')}}")

        @endif

        @if(Session::has('error'))

        toastr.error("{{Session::get('error')}}")

        @endif

        @if(Session::has('success'))

        toastr.success("{{Session::get('success')}}")

        @endif
    </script>

    <script type="text/javascript">
        $('.select2-multi').select2({
                maximumSelectionLength: 8,
                allowClear: true
            });
    </script>

    <script>
        $('#summernote').summernote({
            placeholder: 'And the Oscars goes to...',
            tabsize: 2,
            height: 200
        });
    </script>

<!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>