$(window).ready(function () {
  $('#burger').css("display", "none");
})

function menuShowHide() {
  $('#burger').toggle('slow');
}
