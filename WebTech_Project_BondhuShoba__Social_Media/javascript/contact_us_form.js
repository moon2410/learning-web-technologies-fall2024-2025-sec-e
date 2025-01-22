const form = document.querySelector("form"),
  statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
  e.preventDefault();

  statusTxt.style.color = "#0D6EFD";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";

  form.classList.add("disabled");

  const name = form.querySelector('input[name="name"]').value.trim();
  const email = form.querySelector('input[name="email"]').value.trim();
  const phone = form.querySelector('input[name="phone"]').value.trim();
  const website = form.querySelector('input[name="website"]').value.trim();
  const message = form.querySelector('textarea[name="message"]').value.trim();


  if (!email || !message) {
    statusTxt.style.color = "red";
    statusTxt.innerText = "Email and message fields are required!";
    form.classList.remove("disabled");
    return;
  }

  const emailParts = email.split("@");
  if (emailParts.length !== 2 || emailParts[0] === "" || emailParts[1] === "") {
    statusTxt.style.color = "red";
    statusTxt.innerText = "Enter a valid email address!";
    form.classList.remove("disabled");
    return;
  }

  if (phone && !/^\d+$/.test(phone)) {
    statusTxt.style.color = "red";
    statusTxt.innerText = "Phone number should contain only numbers!";
    form.classList.remove("disabled");
    return;
  }

  if (website && !(website.startsWith("http://") || website.startsWith("https://"))) {
    statusTxt.style.color = "red";
    statusTxt.innerText = "Enter a valid website URL!";
    form.classList.remove("disabled");
    return;
  }

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/contact_us_form_val.php", true);
  xhr.onload = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const response = JSON.parse(xhr.responseText); 

      if (response.error) {
        statusTxt.style.color = "red";
        statusTxt.innerText = response.error;
      } else if (response.success) {
        statusTxt.style.color = "green";
        statusTxt.innerText = response.success;
        form.reset();
        setTimeout(() => {
          statusTxt.style.display = "none";
        }, 3000);
      }
      form.classList.remove("disabled");
    }
  };

  const formData = new FormData(form);
  xhr.send(formData);
};
