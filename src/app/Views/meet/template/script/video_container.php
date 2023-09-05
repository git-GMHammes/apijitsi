<script>
    const videoContainer = document.querySelector('#video-container');
    const videoElement = document.createElement('video');

    videoElement.setAttribute('controls', '');
    const sourceElement = document.createElement('source');
    sourceElement.setAttribute('src', '<?= base_url() . '/assets/media/fnarj/help/login.mp4'; ?>');
    sourceElement.setAttribute('type', '<?= base_url() . '/assets/media/fnarj/help/login.mp4'; ?>');

    videoElement.appendChild(sourceElement);
    videoContainer.appendChild(videoElement);
</script>