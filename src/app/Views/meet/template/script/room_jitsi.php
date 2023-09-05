<script>
    // Importe as funções necessárias da biblioteca lib-jitsi-meet
    import {
        initJitsiConference
    } from 'lib-jitsi-meet';

    // Obtenha o elemento HTML onde a conferência será incorporada
    const jitsiContainer = document.getElementById('jitsi-container');

    // Configurações da conferência
    const options = {
        roomName: 'NomeDaSala', // Defina o nome da sala da conferência
        parentNode: jitsiContainer,
    };

    // Inicialize a conferência Jitsi Meet
    const api = new JitsiMeetExternalAPI('meet.jit.si', options);
    console.log(api);
    // src\app\Views\meet\template\script\room_jitsi.php
</script>