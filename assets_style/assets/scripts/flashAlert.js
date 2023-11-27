const alert = document.querySelector(".custom-alert");

if(alert) {
  setTimeout(() => {
    alert.classList.remove('active');
  },5000);
}