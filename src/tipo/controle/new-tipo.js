$(document).ready(function() {
    $('.btn-new').click(function(e) {
        e.preventDefault();

        $('.modal-title').empty()
        $('.modal-body').empty()

        $('.modal-title').append('Adicionar novo tipo de acesso')

        $('.modal-body').load('../visao/form-tipo.html')

        $('.modal-body').append('../visao/form-tipo.html')

        $('.btn-save').show()

        $('.btn-save').attr('data-operation', 'insert')

        $('#modal-tipo').modal('show')
    })
})