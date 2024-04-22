// script.js

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var comments = document.getElementById("comments").value;
    
    var outputText = "نام: " + firstName + "<br>";
    outputText += "نام خانوادگی: " + lastName + "<br>";
    outputText += "ایمیل: " + email + "<br>";
    outputText += "نظرات: " + comments;
    
    document.getElementById("output").innerHTML = outputText;
  });