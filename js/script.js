
// INÍCIO DO DELETAR FOTO
function teste(){
    alert('Sucesso')
  }


// INICIO DO ENVIAR FOTO
$("#formulario").submit(function(event){
	event.preventDefault();   
    
	var form_data = new FormData( this );
    form_data.append('file', $('#arquivo'))
	
	$.ajax({
		url : 'php/recebe.php',
        processData: false,
		type: 'POST',
        contentType: false,
		data : form_data
	}).done(function(){ //
		$("#txtResponse").html("Imagem enviada com sucesso!").fadeIn( 500 ).delay( 1500 ).fadeOut( 500 );    
        $.ajax({
            type: 'post',
            url: 'php/mostrar.php',
            contentType: "image/png",
            success: function(data){
                $('#fotos').html(data);
            }
          })
        $('#formulario')[0].reset()
        
	},
    
    );
});
// FIM DO ENVIAR FOTO
// ------------------------
// INÍCIO DO MOSTRAR CONTEÚDO
$.ajax({
    type: 'post',
    url: 'php/mostrar.php',
    contentType: "image/png",
    success: function(data){
        $('#fotos').html(data);
    }
  });
//  FIM DO MOSTRAR CONTEÚDO
// -----------------------
