<script>
    function abrirPopupPrint(url, width, height) {
        window.open(url, 'Titulo', 'width=' + width + ',height=' + height);
        // window.open(url, 'Titulo', 'width=900' + ',height=800');
    }
    function printCurrentPage() {
        window.print();
    }
</script>