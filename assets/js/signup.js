
$(document).ready(function() {
        
 
$('#register_submit').click(function(e){
  e.preventDefault();
 
  $.ajax({
    url:"signup",
    type:"post",
    data: $('#signup_t').serialize(),
    dataType: "json",
    success: function(result){
        if(result.status==="success")
        { window.location.href = "login_t";}
        $('#fname').html(result.first_name);
        $('#lname').html(result.last_name);
        $('#email_id').html(result.email);
        $('#pswd').html(result.password);
        $('#cfpswd').html(result.conf_password);
        $('#mobile').html(result.phone_no);
        
    }
  });
});

});

function emailvalid()
{
    var emal=document.signup_t.email.value;
    var ealt=document.getElementById('email_id');
    if(emal!=""){
var emailExp =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(!emal.match(emailExp))
{
    ealt.innerHTML="<font color='red'> Invalid Email id </font>";
    document.signup_t.email.focus();
return false; }
else{
ealt.innerHTML="";
return true;}
} 
else if(emal.length==0)
{
    ealt.innerHTML="<font color='red'>Enter Email id</font>";
    document.signup_t.email.focus();
    return false;
}
}

function isAlphapet_f()
{
var alphaExp = /^[a-zA-Z]+$/;
var namee=document.signup_t.first_name.value;
var nalt=document.getElementById('fname');
if(namee!="")
{
if(!namee.match(alphaExp))
{
nalt.innerHTML="<font color='red'> Invalid Characters </font>";
document.signup_t.first_name.focus();
document.signup_t.first_name.value="";
return false; }
else
{
nalt.innerHTML="";
return true;
}
}
else
if(namee.length==0)
{
nalt.innerHTML="<font color='red'> Invalid Name</font>";
document.getElementById('first_name').focus();
return false;
}}

function isAlphapet_l()
{
var alphaExp = /^[a-zA-Z]+$/;
var namee=document.signup_t.last_name.value;
var nalt=document.getElementById('lname');
if(namee!="")
{
if(!namee.match(alphaExp))
{
nalt.innerHTML="<font color='red'> Invalid Characters </font>";
document.signup_t.last_name.focus();
document.signup_t.last_name.value="";
return false; }
else
{
nalt.innerHTML="";
return true;
}
}
else
if(namee.length==0)
{
nalt.innerHTML="<font color='red'> Invalid Name</font>";
document.getElementById('last_name').focus();
return false;
}}
function passwd()
{var pawd1=document.getElementById('password');var palt=document.getElementById('pswd');
if(pawd1.value.length===0){palt.innerHTML="<font color='red'> Invalid PassWord</font>";document.getElementById('pswd').focus();return false;}
else{palt.innerHTML="";return true;}
}

function pass()
{var pawd1=document.getElementById('password');var pawdcon2=document.getElementById('conf_password');var palt=document.getElementById('pswd');var pcalt=document.getElementById('cfpswd');
if(pawdcon2.value.length==0)
{pcalt.innerHTML="<font color='red'> Invalid Password Cofirm </font>";pawdcon2.focus();return false;}
else if(pawd1.value!=pawdcon2.value){pcalt.innerHTML="";palt.innerHTML="<font color='red'> Password Mismatch</font>";return false;}else{palt.innerHTML="";pcalt.innerHTML="";return true;}
}


function checkForPassOut(node){
    if(node.value !== "RE" && node.value !== "0" ){
        $("#div_ypassout")[0].style.display = "block";
        $("#div_college")[0].style.display = "block";
         $("#div_company")[0].style.display = "none";
    }
    else if(node.value==="RE"){
        $("#div_company")[0].style.display = "block";
        $("#div_ypassout")[0].style.display = "none";
        $("#div_college")[0].style.display = "none";
    }
    else if(node.value==="0"){
        $("#div_company")[0].style.display = "none";
        $("#div_ypassout")[0].style.display = "none";
        $("#div_college")[0].style.display = "none";
    }
}



