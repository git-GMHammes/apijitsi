<script>
    // Definir o tempo inicial em minutos
    var tempoInicial = 30;

    // Converter o tempo em segundos
    var tempoEmSegundos = tempoInicial * 60;

    // Obter as referências para os elementos HTML onde o tempo será exibido
    var temposElemento = document.querySelectorAll('.tempo');

    // Função para atualizar o tempo restante a cada segundo
    function atualizarTempoRestante() {
        // Converter os segundos restantes em minutos e segundos
        var minutos = Math.floor(tempoEmSegundos / 60);
        var segundos = tempoEmSegundos % 60;

        // Formatar os minutos e segundos com dois dígitos
        minutos = minutos < 10 ? '0' + minutos : minutos;
        segundos = segundos < 10 ? '0' + segundos : segundos;

        // Atualizar os elementos HTML com o tempo restante
        temposElemento.forEach(function(elemento) {
            elemento.innerHTML = minutos + ':' + segundos;
        });

        // Verificar se o tempo chegou a zero
        if (tempoEmSegundos === 0) {
            clearInterval(temporizador);

            // Atualizar a página após a contagem regressiva de 30 minutos
            location.reload();
        } else {
            // Reduzir o tempo restante em 1 segundo
            tempoEmSegundos--;
        }
    }

    // Chamar a função inicialmente para evitar um atraso de 1 segundo
    atualizarTempoRestante();

    // Iniciar o temporizador para atualizar o tempo a cada segundo
    var temporizador = setInterval(atualizarTempoRestante, 1000);
</script>