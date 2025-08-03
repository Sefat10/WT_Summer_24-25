function validateform(){
var FirstName=document.getElementById("fname").value;
var LastName=document.getElementById("lname").value;
var Phone=document.getElementById("number").value;
var Password=document.getElementById("password").value;

 if (fname === "" || lname === "") {
    alert("First and Last Name are required.");
    return false;
  }
 
    if (phone === "" || !/^\d{11}$/.test(phone)) {
    alert("Phone must be exactly 11 digits.");
    return false;
  }
  if (password.length < 8) {
    alert("Password must be at least 8 characters long.");
    return false;
  }


alert("Registration is complete");
    return true;
}