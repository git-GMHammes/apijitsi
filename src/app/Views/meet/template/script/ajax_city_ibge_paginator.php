<!-- C:/laragon/www/main/local/app/Views/template/script/ajax_municipio_ibge_paginator.php -->
<script>
    $.getJSON("<?= base_url() . 'city/api/show' ?>", function(data) {
        var tabela = $('#tab_city_ibge_paginator').DataTable({
            data: data.result,
            columns: [
                {data: 'str_uf'},
                {data: 'str_cod_uf_ibge'},
                {data: 'str_doc_munc_ibge'},
                {data: 'str_municipio'},
                {data: 'str_populacao'}
            ],
            pageLength: 10, // Define o número de linhas por página
            language: {
                // url: 'http://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json'
                url: "<?= base_url(); ?>main/api/ajaxptbr"
            },
        });
    });
</script>