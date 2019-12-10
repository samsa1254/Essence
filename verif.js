function ff()
{

   h4=document.getElementById('passz').value;
   h5=document.getElementById('pass2').value;
  if(h4 != h5)
  {
    alert("veuillez saisir le meme mot de passe!")
    return false;
  }
}
