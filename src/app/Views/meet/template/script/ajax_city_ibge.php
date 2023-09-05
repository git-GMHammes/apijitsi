<script>
    $.getJSON("<?= base_url() . 'city/api/show' ?>", function(data) {

        var tabela = $('<table>').addClass('table');
        var cabecalho = $('<thead>').append(
            $('<tr>').append(
                $('<th>').text('UF'),
                $('<th>').text('Código IBGE'),
                $('<th>').text('Código MUNC IBGE'),
                $('<th>').text('Município'),
                $('<th>').text('População'),
                $('<th>').text('Teste')
            )
        );

        var corpo = $('<tbody>');

        data.result.forEach(function(item) {
            var linha = $('<tr>').append(
                $('<td>').text(item.str_uf),
                $('<td>').text(item.str_cod_uf_ibge),
                $('<td>').text(item.str_doc_munc_ibge),
                $('<td>').text(item.str_municipio),
                $('<td>').text(item.str_populacao),
                $('<td>').text("Coloca Algo Aqui")
            );

            corpo.append(linha);
        });

        tabela.append(cabecalho).append(corpo);

        $('#tab_city_ibge').append(tabela);
    });
</script>