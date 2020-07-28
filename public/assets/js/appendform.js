function addAttendee()
{
  var attend_container = document.getElementById("attendee2");
  var button = document.getElementById("attendeeButton");
  var hid = document.getElementsByClassName('hid');

  button.classList.remove("btn-outline-primary");
  button.classList.add("btn-outline-danger");
  button.innerHTML = "Remove Attendee";
  button.setAttribute("onclick", "removeAttendee()");
  
  for(var i = 0; i < hid.length; i++)
  {
    hid[i].setAttribute("required", "required");
  }

  attend_container.classList.remove("d-none");
}

function removeAttendee()
{
  var attend_container = document.getElementById("attendee2");
  var button = document.getElementById("attendeeButton");
  var hid = document.getElementsByClassName('hid');


  button.classList.add("btn-outline-primary");
  button.classList.remove("btn-outline-danger");
  button.innerHTML = "Add Attendee";
  button.setAttribute("onclick", "addAttendee()");

  for(var i = 0; i < hid.length; i++)
  {
    hid[i].removeAttribute("required", "required");
  }

  attend_container.classList.add("d-none");
}

function proceedCV(flag)
{
  var cv_container = document.getElementById("proceedcv");
  if(flag == 1)
  {
    cv_container.classList.remove("d-none");
  } else {
    cv_container.classList.add("d-none");
  }
}
