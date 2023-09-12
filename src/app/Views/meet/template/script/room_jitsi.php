<script src='https://localhost:8443/external_api.js'></script>
<script>
    const domain = 'localhost:8443';
    const options = {
        roomName: 'JitsiMeetAPIExample',
        width: 900,
        height: 600,
        parentNode: document.querySelector('#meet'),
        lang: 'de'
    };
    const api = new JitsiMeetExternalAPI(domain, options);
</script>