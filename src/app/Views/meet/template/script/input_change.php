<script>
    $(function() {
        $('.slider').on('input change', function() {
            $('.slider001').val(this.value);
        });
    })
    $(function() {
        $('.select_get').on('input change', function() {
            $('.input_set').val(this.value);
        });
    })
</script>