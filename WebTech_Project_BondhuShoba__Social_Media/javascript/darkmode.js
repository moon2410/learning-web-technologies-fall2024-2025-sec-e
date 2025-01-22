document.addEventListener("DOMContentLoaded", () => {
    const darkModeToggle = document.getElementById("dark-mode-toggle");
  

    if (localStorage.getItem("darkMode") === "true") {
      document.body.classList.add("dark-mode");
      darkModeToggle.checked = true;
    }
  
    darkModeToggle.addEventListener("change", () => {
      const isDarkMode = darkModeToggle.checked;
      document.body.classList.toggle("dark-mode", isDarkMode);
  

      localStorage.setItem("darkMode", isDarkMode);
  
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "controller/darkmode.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send(`darkMode=${isDarkMode}`);
    });
  });
  