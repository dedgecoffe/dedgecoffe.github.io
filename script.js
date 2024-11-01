// script.js
document.addEventListener("DOMContentLoaded", function() {
    const galleryItems = document.querySelectorAll(".gallery-item img");
  
    galleryItems.forEach(item => {
      item.addEventListener("click", () => {
        const modal = document.createElement("div");
        modal.classList.add("modal");
        modal.innerHTML = `<img src="${item.src}" alt="${item.alt}">`;
        document.body.appendChild(modal);
  
        modal.addEventListener("click", () => {
          modal.remove();
        });
      });
    });
  });
  