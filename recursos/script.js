// Inicializando a tabela inteligente
$(document).ready( function () {
    $('#tabela').DataTable();
} );

var table = new DataTable("#tabela", {
    language: {
        url: 'http://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
    }
});

$(document).ready(function(){
    $('.cpf').mask('000.000.000-00');
});

$(document).ready(function(){
    $('.cep').mask('00000-000');
})