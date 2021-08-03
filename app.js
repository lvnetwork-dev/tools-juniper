$('#btnGerarScript').click(function() {
  
  var dados = $('#gerarScript').serialize();
  var tempo = 2000;
  var erros = 0;

  $("#gerarScript input").each(function(){
    $(this).val() == "" ? erros++ : ""; 
  });

  if(erros > 0){  
    
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: tempo,
      timerProgressBar: true,
    });

    Toast.fire({
      icon: 'warning',
      title: erros+' Campo(s) em Branco'
    });

    return false;
        
  } else {

    function reloadPagina() {
      document.location.reload();
    }
                
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: 'app.php',
      async: true,
      data: dados,
                      
      success: function(data) {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: tempo,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        
        });

        Toast.fire({
          icon: 'success',
          title: 'Script Gerado!'
        });

        $('#scriptGerado').html(data).show();
                          
      },

      error: function(data){

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: tempo,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        });

        Toast.fire({
          icon: 'error',
          title: 'Erro ao Gerar!'
        });

          setTimeout(reloadPagina, tempo);
      }
        
    });

    return false;

  }

});