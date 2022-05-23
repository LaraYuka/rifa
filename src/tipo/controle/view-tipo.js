$(document).ready(function() {

    $('#table-tipo').on('click', 'button.btn-view', function(e) {

        e.preventDefault()

        //Alterar as informações do modal apresentação dos dados para

        $('.modal-title').empty()
        $('.modal-body').empty()

        $('.modal-title').append('Visualização de registros')

        //let ID = `ID=${$(this).attr('id')}`
        let ID = $(this).attr('id')

        $.ajax({
            type: 'POST',
            dataType: 'json',
            assync: true,
            data: ID,
            url: '../modelo/view-tipo.php',
            success: function(dado) {
                if (dado.tipo == "success") {
                    $('.modal-body').load('../visao/form-tipo.html', function() {
                        $('#NOME').val(dado.dados.NOME)
                        $('#NOME').attr('readonly', 'true')
                    })
                    $('.btn-save').hide()
                    $('#modal-tipo').modal('show')
                } else {
                    Swal.fire({ //Inicialização do SweetAlert
                        title: 'e-Rifa', //Titulo da janela SweetAlert
                        text: dado.mensagem, //Mensagem retomada do microserviço
                        type: dado.tipo, //tipo de retorno [success, info ou error]
                        confirmButtonText: 'OK'
                    })
                }
            }
        })
    })
})