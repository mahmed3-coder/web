const loginForm = document.getElementById("login-form");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;


  if (username === "KBTCadmin" && password === "PBSdevices") {
    window.location.href = "home.html";
  } else {
    alert("Invalid username or password");
  }
        

});



