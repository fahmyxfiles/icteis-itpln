@props(['errors'])

@if ($errors->any())
    <script type="text/javascript">
    $(document).ready(function() {
        var txtErrors = "";
        @foreach ($errors->all() as $error)
        txtErrors += '{{ $error }}<br>';
        @endforeach
        new swal({
            title: "Error!",
            html: txtErrors,
            buttonsStyling: false,
            confirmButtonClass: "btn btn-danger",
            icon: "error"
        });
    });
    </script>
@endif
