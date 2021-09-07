function validation(){

var Firstname=document.getElementById("First name");
var Lastname=document.getElementById("Last name");
var DOB=document.getElementById("DOB");
var EMAIL=document.getElementById("email");
var ContactNumber=document.getElementById("Number");
var Password=document.getElementById("password");
var RePassword=document.getElementById("password");

if(Firstname.value==""|| Lastname.value=="" || DOB.value=="" || EMAIL.value=="" || ContactNumber.value=="" || Password.value=="" || RePassword.value==""){
alert("Null Fields not access");
return false;
}
else{
true;

}
}