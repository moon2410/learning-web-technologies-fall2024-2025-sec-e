document.addEventListener("DOMContentLoaded", () => {
    const chatColorPicker = document.getElementById("chatColor");
    const chatBox = document.querySelector(".chat-box");
  

    const savedColor = localStorage.getItem("chatColor");
    if (savedColor) {
      chatBox.style.backgroundColor = savedColor;
      chatColorPicker.value = savedColor;
    }
  
    chatColorPicker.addEventListener("input", () => {
      const selectedColor = chatColorPicker.value;
      chatBox.style.backgroundColor = selectedColor;
  
      localStorage.setItem("chatColor", selectedColor);
  
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "controller/chat_color.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send(`color=${selectedColor}`);
    });
  });
  