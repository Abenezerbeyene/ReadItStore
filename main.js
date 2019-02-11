
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

function validateForm(){
  var fname = document.forms["Form"]["fname"].value;
  var lname = document.forms["Form"]["lname"].value;
  var email = document.forms["Form"]["email"].value;
  var Pnumber = document.forms["Form"]["Pnumber"].value;
  var address = document.forms["Form"]["address"].value;
  var Pcode = document.forms["Form"]["Pcode"].value;
  var city = document.forms["Form"]["city"].value;
  var Unumber = document.forms["Form"]["Unumber"].value;
  var email = document.Form.email.value;
  var Pnumber= document.Form.Pnumber.value;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var phoneformat = document.Form.Pnumber.value;
  var phoneformat =  /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
  var Cityformat=document.Form.city.value;
  var Cityformat =  /^[A-Za-z]+$/;
  var Pcodeformat=document.Form.Pcode.value;
  var Pcodeformat =  /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;
  
  if (fname == "") {
      document.getElementById('error_fname').innerHTML="required";
      document.Form.fname.focus();
      return false
    }
    else
    {
      document.getElementById('error_fname').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if(lname =='')
    {
       document.getElementById('error_lname').innerHTML="required";
       document.Form.lname.focus();
       return false;
    }
    else
    {
      document.getElementById('error_lname').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if (email == "" || !email.match(mailformat))
    {
       document.getElementById('error_email').innerHTML="required or please enter the correct format";
       document.Form.email.focus();
       return false;
    }
    else
    {
      document.getElementById('error_email').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if (Pnumber == "" || !Pnumber.match(phoneformat)) 
    {
       document.getElementById('error_Pnumber').innerHTML="rrequired or please enter the correct format";
       document.Form.Pnumber.focus();
       return false;
    }
    else
    {
      document.getElementById('error_Pnumber').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if(address =='')
    {
       document.getElementById('error_Address').innerHTML="required";
       document.Form.address.focus();
       return false;
    }
    else
    {
      document.getElementById('error_Address').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if(city =='')
    {
       document.getElementById('error_city').innerHTML="required";
       document.Form.city.focus();
       return false;
    }
    else
    {
      document.getElementById('error_city').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if (Pcode == "" || !Pcode.match(Pcodeformat))
    {
       document.getElementById('error_Pcode').innerHTML="required";
       document.Form.Pcode.focus();
       return false;
    }
    else
    {
      document.getElementById('error_Pcode').innerHTML="<span style='color: Green;'>Good</span>";
    }
    if (Unumber == "")
    {
      
      return true;
    }
    
    else 
    {
      return true;
    }
  }