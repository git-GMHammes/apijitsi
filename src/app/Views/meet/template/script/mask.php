<script>
     $(".seiMask").mask("SEI-999999/999999/9999");
     $('.date').mask('00/00/0000');
     $('.time').mask('00:00:00');
     $('.date_time').mask('00/00/0000 00:00:00');
     $('.cep').mask('00000-000');
     $('.str_zip_code').mask('99.999-999', {
         reverse: true
     });
     $('.phone').mask('0000-0000');
     $('.phone_with_ddd').mask('(99)99999-9999');
     $('.str_cell_phone').mask('(99)99999-9999', {
         reverse: true
     });
    //  $('.str_cell_phone').mask('(99)99999-9999', {
    //      reverse: true
    //  });
     $('.str_residential').mask('(99)9999-9999', {
         reverse: true
     });
     $('.str_commercial').mask('(99)9999-9999', {
         reverse: true
     });
     $('.phone_us').mask('(000) 000-0000');
     $('.mixed').mask('AAA 000-S0S');
     $('.cpf').mask('000.000.000-00', {
         reverse: true
     });
     $('.int_individual_registration').mask('000.000.000-00', {
         reverse: true
     });
     $('.str_cpf').mask('999.999.999-99', {
         reverse: true
     });
     $('.str_individual_taxpayer_registration').mask('999.999.999-99', {
         reverse: true
     });
     $('.cnpj').mask('00.000.000/0000-00', {
         reverse: true
     });
     $('.money').mask('000.000.000.000.000,00', {
         reverse: true
     });
     $('.money2').mask("....0,00", {
         reverse: true
     });
     $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
         translation: {
             'Z': {
                 pattern: /[0-9]/,
                 optional: true
             }
         }
     });
     $('.ip_address').mask('099.099.099.099');
     $('.percent').mask('..0,00%', {
         reverse: true
     });
     $('.clear-if-not-match').mask("00/00/0000", {
         clearIfNotMatch: true
     });
     $('.placeholder').mask("00/00/0000", {
         placeholder: "__/__/____"
     });
     $('.fallback').mask("00r00r0000", {
         translation: {
             'r': {
                 pattern: /[\/]/,
                 fallback: '/'
             },
             placeholder: "__/__/____"
         }
     });
     $('.selectonfocus').mask("00/00/0000", {
         selectOnFocus: true
     });
 </script>