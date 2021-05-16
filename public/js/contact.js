// Contact Form Validation
function validateForm() {
    // event.preventDefault()
    var name = document.forms["contactForm"]["name"].value;
    console.log(name)
    var email = document.forms["contactForm"]["email"].value;
    var message = document.forms["contactForm"]["message"].value;
    document.getElementById("error-msg").style.opacity = 0;
    document.getElementById('error-msg').innerHTML = "";
    if (name == "" || name == null) {
      document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Name*</div>";
      fadeIn();
      return false;
    }
    if (email == "" || email == null) {
      document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter an email address*</div>";
      fadeIn();
      return false;
    }
    if (message == "" || message == null) {
      document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a message*</div>";
      fadeIn();
      return false;
    }
    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function () {
    //   if (this.readyState == 4 && this.status == 200) {
    //     document.getElementById("simple-msg").innerHTML = this.responseText;
    //     document.forms["contactForm"]["name"].value = "";
    //     document.forms["contactForm"]["email"].value = "";
    //     document.forms["contactForm"]["message"].value = "";
    //     document.forms["contactForm"]["document"].value = "";
    //   }
    // };
    // xhttp.open("POST", "save", true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
    // xhttp.send("&name=" + name + "&email=" + email + "&message=" + message + "&document=" + document);
    // return false;
  }
  function fadeIn() {
    var fade = document.getElementById("error-msg");
    var opacity = 0;
    var intervalID = setInterval(function () {
      if (opacity < 1) {
        opacity = opacity + 0.5
        fade.style.opacity = opacity;
      } else {
        clearInterval(intervalID);
      }
    }, 200);
  }
