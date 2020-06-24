document.getElementById("contact2").style.display="none";
document.getElementById("btn_delete1").style.display="none";

function showContact2(){
  document.getElementById("contact2").style.display="block";
  document.getElementById("btn_delete1").style.display="block";
  document.getElementById("btn_add1").style.display="none";
  var form2 = document.getElementsByClassName("form-2");
  for (var i = 0; i < form2.length; i++) {
    Distribute(slides.item(i));
  }
}

function hideContact2(){
  document.getElementById("btn_add1").style.display="block";
  document.getElementById("contact2").style.display="none";
  document.getElementById("btn_delete1").style.display="none";
}
