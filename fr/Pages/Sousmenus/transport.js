// Les checkbox sont toujours initialisées à décoché
var checkboxes = document.getElementsByTagName('input');

for (var i=0; i<checkboxes.length; i++)  {
  if (checkboxes[i].type == 'checkbox')   {
    checkboxes[i].checked = false;
  }
}

// Changer la taille du texte pour le show more / show less
function myFunction(bil, bon) {
  var le = document.getElementById(bil);
  var hobbit = document.getElementById(bon);
  if (le.checked == true){
    hobbit.style.height = 'auto';
  } else {
     hobbit.style.height = '0';
  }
}
