<script type="text/javascript">
    function ClosePrint() {
        setTimeout(function() {
            window.print();
        }, 500);
        window.onfocus = function() {
            setTimeout(function() {
                window.close();
            }, 500);
        }
    }
</script>