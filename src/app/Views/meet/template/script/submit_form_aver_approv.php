<script>
  document.getElementById('yes').addEventListener('change', function() {
    if (this.checked) {
      document.getElementById('form_aver_approv').submit();
    }
  });

  document.getElementById('no').addEventListener('change', function() {
    if (this.checked) {
      document.getElementById('form_aver_approv').submit();
    }
  });
</script>