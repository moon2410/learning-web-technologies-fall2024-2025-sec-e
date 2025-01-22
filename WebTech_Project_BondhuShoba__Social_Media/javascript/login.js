const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault(); 
};

continueBtn.onclick = () => {
    const email = form.querySelector("input[name='email']").value.trim();
    const password = form.querySelector("input[name='password']").value;

    if (!email || !password) {
        errorText.style.display = "block";
        errorText.textContent = "All input fields are required!";
        return;
    }

    if (email.indexOf('@') === -1 || email.lastIndexOf('.') < email.indexOf('@')) {
        errorText.style.display = "block";
        errorText.textContent = "Please enter a valid email address!";
        return;
    }

    if (password.length < 8) {
        errorText.style.display = "block";
        errorText.textContent = "Password must be at least 8 characters long!";
        return;
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "controller/login.php", true); 
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.responseText.trim(); 
                if (data === "success") {
                    location.href = "users.php"; 
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            } else {
                console.error("Request failed with status:", xhr.status);
                errorText.style.display = "block";
                errorText.textContent = "Unexpected error occurred. Please try again!";
            }
        }
    };

    try {
        let formData = new FormData(form); 
        xhr.send(formData);
    } catch (error) {
        console.error("Error sending form data:", error);
        errorText.style.display = "block";
        errorText.textContent = "Failed to send form data. Please try again.";
    }
};
