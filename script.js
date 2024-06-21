document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contact-form");
    const formResponse = document.getElementById("form-response");
  
    form.addEventListener("submit", (event) => {
      event.preventDefault();
  
      const formData = new FormData(form);
  
      fetch("contact.php", {
        method: "POST",
        body: formData,
      })
        .then(response => response.text())
        .then(data => {
          formResponse.innerHTML = data;
          form.reset();
        })
        .catch(error => {
          formResponse.innerHTML = "<p>送出訊息失敗，請稍後再試。</p>";
        });
    });
  });
  