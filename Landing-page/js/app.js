$(window).ready(function() {
  $("#modal").addClass('none');
});

function fermer() {
    $("#modal").removeClass('index').addClass('none');
}

function connexion() {
  $("#modal").removeClass('none').addClass('index');
  $('#formConnexion').show();
  $('#formInscription').hide();
}

function inscription() {
  $("#modal").removeClass('none').addClass('index');
  $('#formInscription').show();
  $('#formConnexion').hide();
}
