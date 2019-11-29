function verif()
{

  var h4=document.getElementById('mdp1').value;
  var h5=document.getElementById('mdp2').value;
  var h7=document.getElementById('zip').value;
  var h9=document.getElementById('tel').value;
  if(h4 != h5)
  {
    alert("veuillez saisir le meme mot de passe!")
    return false;
  }

  if(h7.length >4 || h7.length <4)
  {
    alert("le zip ne doit pas depasser 4 chiffres");
    return false;
  }
  if(h9.length >8 || h9.length <8 )
  {
    alert("le num telephone ne doit pas depasser 8 chiffres");
    return false;
  }
}
