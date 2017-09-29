$(window).ready(function() {
  $("#formExo").hide();
  $("#supprExo").hide();
  $("#modifExo").hide();
});

function showExo(){
  $("#formExo").show('slow');
}

function hideExo(){
  $("#formExo").hide('slow');
}

function showSuppr(){
  $("#supprExo").show('slow');
}

function hideSuppr(){
  $("#supprExo").hide('slow');
}

function showModif(){
  $("#modifExo").show('slow');
}

function hideModif(){
  $("#modifExo").hide('slow');
}
