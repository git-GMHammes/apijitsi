<script>
    document.getElementById("formulario_documento").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        let form = event.target;
        let submitButton = document.activeElement;

        if (submitButton.name === "submit1") {
            // Lógica para o botão "Enviar Opção 1"
            form.action = "<?= base_url('cadastroDoc/pesquisa') ?>";
        } else if (submitButton.name === "submit2") {
            // Lógica para o botão "Enviar Opção 2"
            form.action = "<?= site_url('/adicionar_documento') ?>";
        }
        form.submit(); // Submete o formulário com a ação e o método apropriados
    });
</script>
<!-- <input name ="submit1" type="submit"> <input name ="submit2" type="submit"> -->