function validateForm() {
  let emailInput = document.getElementById("email");
  let emailError = document.getElementById("email-error");

  let messageInput = document.getElementById("message");
  let messageError = document.getElementById("message-error");

  let emailValue = emailInput.value;
  let messageValue = messageInput.value;
  let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

  if (emailValue === "") {
    emailError.textContent = "Email is required.";
    return false;
  } else if (!emailPattern.test(emailValue)) {
    emailError.textContent =
      "Invalid email format. Please enter a valid email address.";
    hasErrors = true;
    return false;
  } else {
    emailError.textContent = "";
    if (messageValue === "") {
      messageError.textContent = "You must enter a message.";
      return false;
    } else {
      messageError.textContent = "";
      return true;
    }
  }
}
