$(function(){
  
  $('#foto').change(function(){
    $('.fileinput').attr('disabled', 'disabled');
    $('.text-upload').html("O arquivo está pronto para ser enviado!");
    $('.btn-upload').show();
  })
})

$('.botaoComprar').click(function(){
    
  var id = $(this).attr('id');

  $.ajax({

    url: url+'index.php?acao=adicionar&produto='+id,
    type: 'get',
    success: function(data){
      if(data != false)
      {
        alert(data);
      } else {
        $('.notification').fadeIn(300);
        setTimeout(function(){
          document.location.reload();
        }, 1000);  
      }
      
    }

  })    
})