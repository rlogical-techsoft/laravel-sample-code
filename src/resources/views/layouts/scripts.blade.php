<!-- Jquery scripts -->
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/popper.min.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/js/jquery.validate.min.js') }}
{{ Html::script('assets/js/jquery.dataTables.min.js') }}
{{ Html::script('assets/js/dataTables.bootstrap4.min.js') }}
{{ Html::script('assets/js/dataTables.responsive.min.js') }}

<script>
//CSRF TOKEN (for Laravel)
$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
</script>
{{ Html::script('assets/js/general.js') }}