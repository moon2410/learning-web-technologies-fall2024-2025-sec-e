function validateForm() {
    let name = document.getElementById("author_name").value;
    let contact = document.getElementById("contact_no").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    if (!name || !contact || !username || !password) {
        alert("All fields are required!");
        return false;
    }
    return true;
}

function searchAuthor() {
    let query = document.getElementById("searchQuery").value;
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../controller/search_author.php?q=" + query, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("searchResults").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
