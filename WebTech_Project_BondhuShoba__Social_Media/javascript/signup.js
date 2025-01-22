const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault();
};

continueBtn.onclick = () => {
    const firstName = form.fname.value.trim();
    const lastName = form.lname.value.trim();
    const email = form.email.value.trim();
    const password = form.password.value.trim();
    const image = form.image.files[0];

    if (!firstName || !lastName) {
        showError("First and last names are required.");
        return;
    }

    if (!isValidEmail(email)) {
        showError("Please enter a valid email address.");
        return;
    }

    if (!isValidPassword(password)) {
        if (password.length < 8) {
            showError("Password must be at least 8 characters long.");
        } else if (!containsLetter(password)) {
            showError("Password must include at least one letter.");
        } else if (!containsNumber(password)) {
            showError("Password must include at least one number.");
        } else {
            showError("Password must include at least one special character.");
        }
        return;
    }

    if (!image || !isValidImage(image)) {
        showError("Please upload a valid image file (PNG, GIF, JPEG, JPG).");
        return;
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "controller/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "users.php";
                } else {
                    showError(data);
                }
            }
        }
    };
    let formData = new FormData(form);
    xhr.send(formData);
};

function showError(message) {
    errorText.style.display = "block";
    errorText.textContent = message;
}

function isValidEmail(email) {
    if (!email.includes("@") || !email.includes(".")) return false;
    const atIndex = email.indexOf("@");
    const dotIndex = email.lastIndexOf(".");
    return atIndex > 0 && dotIndex > atIndex + 1 && dotIndex < email.length - 1;
}

function isValidPassword(password) {
    return (
        password.length >= 8 &&
        containsLetter(password) &&
        containsNumber(password) &&
        containsSpecialCharacter(password)
    );
}

function containsLetter(str) {
    for (let char of str) {
        if ((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z')) {
            return true;
        }
    }
    return false;
}

function containsNumber(str) {
    for (let char of str) {
        if (char >= '0' && char <= '9') {
            return true;
        }
    }
    return false;
}

function containsSpecialCharacter(str) {
    const specialCharacters = "!@#$%^&*()_+[]{}|;:',.<>?/`~";
    for (let char of str) {
        if (specialCharacters.includes(char)) {
            return true;
        }
    }
    return false;
}

function isValidImage(image) {
    const validTypes = ["image/png", "image/gif", "image/jpeg", "image/jpg"];
    return validTypes.includes(image.type);
}
