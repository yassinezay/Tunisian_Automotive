let textInput = document.getElementById("zmessage");

let button = document.getElementsById("submitbtn");


function messagesValidation() {
    if (textInput.value.length < 10) {
        textError = " Le message doit compter au minimum 10 caractères.";
        document.getElementById("textEr").innerHTML = textError;
        document.getElementById("submitbtn").setAttribute("disabled", "true");

        return false;
    }else
    {
    document.getElementById("textEr").innerHTML =
        "<p style='color:green'> Correct </p>";
        document.getElementById('submitbtn').removeAttribute("disabled");

    return true;
    }
}

/*let textInput = document.getElementById("message");*/
let name = document.getElementById("name");
//let button = document.getElementsById("submitbtn");

/*
function messagesValidation() {
    if (textInput.value.length < 10) {
        textError = " Le message doit compter au minimum 10 caractères.";
        document.getElementById("textEr").innerHTML = textError;

        return false;
    }
    document.getElementById("textEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

document.forms["emessage"].addEventListener("submit", function (e) {
    var inputs = document.forms["emessage"];
    let ids = [
        "erreur",
        "textEr",
        "erreur"
    ];

    ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (textInput.value.length < 10) {
        errors = false;
        document.getElementById("textEr").innerHTML =
            "Le texte doit compter au minimum 10 caractères.";
    } 
     else {
        errors = true;
    }
    //Traitement générique
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            errors = false;
            document.getElementById("erreur").innerHTML =
                "Veuillez renseigner tous les champs";
        }
    }

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }
});
*/
function nameValidation() {
    var letters = /^[A-Za-z]+$/;
    let name = document.getElementById("name"); 
   // document.getElementById('submitbtn').setAttribute('disabled', 'disabled');
   

  if (name.value.length < 3) {
      NameError = " Le nom doit compter au minimum 3 caractères.";
      document.getElementById("nomEr").innerHTML = NameError;
      document.getElementById("seconddiv").setAttribute("hidden", true);
      document.getElementById("thirddiv").setAttribute("hidden", true);
      document.getElementById("fourthdiv").setAttribute("hidden", true);
      document.getElementById("fifthdiv").setAttribute("hidden", true);
      document.getElementById("sixthdiv").setAttribute("hidden", true);


      return false;
  }
  if (!name.value.match(letters)) {
      NameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
      lNameValid2 = false;
      document.getElementById("nomEr").innerHTML = NameError2;
      document.getElementById("seconddiv").setAttribute("hidden", true);
      document.getElementById("thirddiv").setAttribute("hidden", true);
      document.getElementById("fourthdiv").setAttribute("hidden", true);
      document.getElementById("fifthdiv").setAttribute("hidden", true);
      document.getElementById("sixthdiv").setAttribute("hidden", true);
      return false;
  }
  document.getElementById("nomEr").innerHTML =
      "<p style='color:green'>Correct</p>";
      Valid= document.getElementById("nomEr").value;
      document.getElementById("seconddiv").removeAttribute("hidden"); 

     


  return true;
  }
  
  function lastnameValidation() {
    var letters = /^[A-Za-z]+$/;
    let lastname = document.getElementById("lastname");    

  if (lastname.value.length < 3) {
      NameError = " Le nom doit compter au minimum 3 caractères.";
      document.getElementById("nameEr").innerHTML = NameError;
      document.getElementById("thirddiv").setAttribute("hidden", true);
      document.getElementById("fourthdiv").setAttribute("hidden", true);
      document.getElementById("fifthdiv").setAttribute("hidden", true);
      document.getElementById("sixthdiv").setAttribute("hidden", true);
      return false;
  }
  if (!lastname.value.match(letters)) {
      NameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
      lNameValid2 = false;
      document.getElementById("nameEr").innerHTML = NameError2;
      document.getElementById("thirddiv").setAttribute("hidden", true);
      document.getElementById("fourthdiv").setAttribute("hidden", true);
      document.getElementById("fifthdiv").setAttribute("hidden", true);
      document.getElementById("sixthdiv").setAttribute("hidden", true);
      return false;
  }
  document.getElementById("nameEr").innerHTML =
      "<p style='color:green'> Correct </p>";
    document.getElementById("thirddiv").removeAttribute("hidden"); 


  return true;
  }

  function verifyEmail() 
  {
    var regex = /^\S+@\S+\.\S+$/;

    var email = document.getElementById("email").value;
    if(email == "") 
    {
        document.getElementById("psEmail").innerHTML="Please fill in your email.";
       
        document.getElementById("fourthdiv").setAttribute("hidden", true);
        document.getElementById("fifthdiv").setAttribute("hidden", true);
        document.getElementById("sixthdiv").setAttribute("hidden", true);        return false;
    } 
    if(!email.match(regex)) 
    {
        document.getElementById("psEmail").innerHTML= "Please enter a valid email address";
        document.getElementById("fourthdiv").setAttribute("hidden", true);
        document.getElementById("fifthdiv").setAttribute("hidden", true);
        document.getElementById("sixthdiv").setAttribute("hidden", true);      
        return false;
    } 
 
        document.getElementById("psEmail").innerHTML =
        "<p style='color:green'> Correct </p>";  
        document.getElementById("fourthdiv").removeAttribute("hidden"); 


    return true;
    
    

}
  function verifyPassword() {  
    var pw = document.getElementById("password").value;  
    //check empty password field  
    if(pw == "") {  
       document.getElementById("psEr").innerHTML = "Fill the password please.";  
    
       document.getElementById("fifthdiv").setAttribute("hidden", true);
       document.getElementById("sixthdiv").setAttribute("hidden", true);
       return false;  
    }  
     
   //minimum password length validation  
    if(pw.length < 8) {  
       document.getElementById("psEr").innerHTML = "Password length must be atleast 8 characters"; 
       
       document.getElementById("fifthdiv").setAttribute("hidden", true);
       document.getElementById("sixthdiv").setAttribute("hidden", true);
       return false;  
    }  
    
  //maximum length of password validation  
    if(pw.length > 15) {  
       document.getElementById("psEr").innerHTML = "Password length must not exceed 15 characters";  
       
       document.getElementById("fifthdiv").setAttribute("hidden", true);
       document.getElementById("sixthdiv").setAttribute("hidden", true);
       return false;  
    } else {  
        document.getElementById("psEr").innerHTML =
        "<p style='color:green'> Correct </p>";  
        document.getElementById("fifthdiv").removeAttribute("hidden"); 

        
    }  
  }  

  function matchingpasswords()
  {
    var passInput = document.getElementById("password");  
    var cPassInput = document.getElementById("confirmpassword");

    if (
        passInput.value != cPassInput.value ||
        passInput.value == "" ||
        cPassInput == ""
    ) {
        document.getElementById("pssEr").innerHTML = "Passwords aren't matching.";  
				document.getElementById("sixthdiv").setAttribute("hidden", true)

        return false; 
    } 
   
        document.getElementById("pssEr").innerHTML =
        "<p style='color:green'> Matchy matchy </p>";
        document.getElementById("sixthdiv").removeAttribute("hidden"); 


  }
 
  function Showuptextarea() {
    document.getElementById("c").removeAttribute("hidden")

}