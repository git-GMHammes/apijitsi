<script type="text/javascript">
    function abrirPopup(url, width, height) {
        var popup = window.open(url, 'Titulo', 'width=' + width + ',height=' + height);
        popup.onload = function() {
            popup.print();
        };
    }
</script>
