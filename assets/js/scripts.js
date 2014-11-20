$(function(){
  
  $('#foto').change(function(){
    $('.fileinput').attr('disabled', 'disabled');
    $('.text-upload').html("O arquivo está pronto para ser enviado!");
    $('.btn-upload').show();
  })
})